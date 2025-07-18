<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\WorkImage;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Work::with(['category', 'user', 'tags']);
        
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        
        if ($request->filled('difficulty_rating')) {
            $query->where('difficulty_rating', $request->difficulty_rating);
        }
        
        if ($request->filled('impact_rating')) {
            $query->where('impact_rating', $request->impact_rating);
        }
        
        if ($request->filled('progress_rating')) {
            $query->where('progress_rating', $request->progress_rating);
        }
        
        $works = $query->orderBy('impact_rating', 'desc')
                      ->orderBy('created_at', 'asc')
                      ->get();
        
        $categories = Category::all();
        
        return view('works.index', compact('works', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.index')->with('error', '権限がありません。');
        }
        
        $categories = Category::all();
        $tags = Tag::all();
        return view('works.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.index')->with('error', '権限がありません。');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|image|max:2048',
            'cover_images' => 'nullable|array|max:10',
            'cover_images.*' => 'image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'difficulty_rating' => 'required|integer|min:0|max:5',
            'impact_rating' => 'required|integer|min:0|max:5',
            'progress_rating' => 'required|integer|min:0|max:5',
            'background' => 'nullable|string',
            'achievement' => 'nullable|string',
            'improvements' => 'nullable|string',
            'related_videos' => 'nullable|string',
            'faq' => 'nullable|string',
            'related_links' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);
        
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('covers', 'public');
            $validated['cover_image'] = $path;
        }
        
        $validated['user_id'] = Auth::id();
        
        $work = Work::create($validated);
        
        if ($request->hasFile('cover_images')) {
            foreach ($request->file('cover_images') as $index => $file) {
                $path = $file->store('covers', 'public');
                $work->images()->create([
                    'image_path' => $path,
                    'sort_order' => $index
                ]);
            }
        }
        
        if ($request->has('tags')) {
            $work->tags()->attach($request->tags);
        }
        
        return redirect()->route('works.show', $work->id)
            ->with('success', '実績が投稿されました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $work = Work::with(['category', 'user', 'tags', 'evaluations.user', 'images'])->findOrFail($id);
        
        $evaluations = $work->evaluations()->whereHas('user', function($query) {
            $query->where('status', 'active');
        })->where('is_visible', true)->get();
        
        return view('works.show', compact('work', 'evaluations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $work = Work::with(['tags', 'images'])->findOrFail($id);
        
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.index')->with('error', '権限がありません。');
        }
        
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('works.edit', compact('work', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $work = Work::findOrFail($id);
        
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.index')->with('error', '権限がありません。');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|image|max:2048',
            'cover_images' => 'nullable|array|max:10',
            'cover_images.*' => 'image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'difficulty_rating' => 'required|integer|min:0|max:5',
            'impact_rating' => 'required|integer|min:0|max:5',
            'progress_rating' => 'required|integer|min:0|max:5',
            'background' => 'nullable|string',
            'achievement' => 'nullable|string',
            'improvements' => 'nullable|string',
            'related_videos' => 'nullable|string',
            'faq' => 'nullable|string',
            'related_links' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);
        
        if ($request->hasFile('cover_image')) {
            if ($work->cover_image) {
                Storage::disk('public')->delete($work->cover_image);
            }
            
            $path = $request->file('cover_image')->store('covers', 'public');
            $validated['cover_image'] = $path;
        }
        
        $work->update($validated);
        
        if ($request->hasFile('cover_images')) {
            foreach ($request->file('cover_images') as $index => $file) {
                $path = $file->store('covers', 'public');
                $work->images()->create([
                    'image_path' => $path,
                    'sort_order' => $work->images()->count() + $index
                ]);
            }
        }
        
        if ($request->has('tags')) {
            $work->tags()->sync($request->tags);
        } else {
            $work->tags()->detach();
        }
        
        return redirect()->route('works.show', $work->id)
            ->with('success', '実績が更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $work = Work::findOrFail($id);
        
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.index')->with('error', '権限がありません。');
        }
        
        if ($work->cover_image) {
            Storage::disk('public')->delete($work->cover_image);
        }
        
        $work->delete();
        
        return redirect()->route('works.index')
            ->with('success', '実績が削除されました。');
    }
    
    /**
     * Remove a specific image from a work.
     */
    public function destroyImage(string $workId, string $imageId)
    {
        $work = Work::findOrFail($workId);
        
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.edit', $work->id)->with('error', '権限がありません。');
        }
        
        $image = $work->images()->findOrFail($imageId);
        
        if ($image->image_path) {
            Storage::disk('public')->delete($image->image_path);
        }
        
        $image->delete();
        
        return redirect()->route('works.edit', $work->id)
            ->with('success', '画像が削除されました。');
    }
}

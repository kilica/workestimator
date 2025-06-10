<?php

namespace App\Http\Controllers;

use App\Models\Work;
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
    public function index()
    {
        $works = Work::with(['category', 'user', 'tags'])->latest()->paginate(10);
        return view('works.index', compact('works'));
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
            'category_id' => 'required|exists:categories,id',
            'difficulty_rating' => 'required|integer|min:0|max:5',
            'impact_rating' => 'required|integer|min:0|max:5',
            'progress_rating' => 'required|integer|min:0|max:5',
            'background' => 'nullable|string',
            'achievement' => 'nullable|string',
            'improvements' => 'nullable|string',
            'related_videos' => 'nullable|string',
            'faq' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);
        
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('covers', 'public');
            $validated['cover_image'] = $path;
        }
        
        $validated['user_id'] = Auth::id();
        
        $work = Work::create($validated);
        
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
        $work = Work::with(['category', 'user', 'tags', 'evaluations.user'])->findOrFail($id);
        
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
        $work = Work::with(['tags'])->findOrFail($id);
        
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
            'category_id' => 'required|exists:categories,id',
            'difficulty_rating' => 'required|integer|min:0|max:5',
            'impact_rating' => 'required|integer|min:0|max:5',
            'progress_rating' => 'required|integer|min:0|max:5',
            'background' => 'nullable|string',
            'achievement' => 'nullable|string',
            'improvements' => 'nullable|string',
            'related_videos' => 'nullable|string',
            'faq' => 'nullable|string',
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
}

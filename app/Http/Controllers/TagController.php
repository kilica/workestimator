<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags',
        ]);
        
        Tag::create($validated);
        
        return redirect()->route('tags.index')
            ->with('success', 'タグが作成されました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('tags.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $tag = Tag::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,' . $id,
        ]);
        
        $tag->update($validated);
        
        return redirect()->route('tags.index')
            ->with('success', 'タグが更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $tag = Tag::findOrFail($id);
        
        if ($tag->works()->count() > 0) {
            return redirect()->route('tags.index')
                ->with('error', 'このタグは実績で使用されているため削除できません。');
        }
        
        $tag->delete();
        
        return redirect()->route('tags.index')
            ->with('success', 'タグが削除されました。');
    }
}

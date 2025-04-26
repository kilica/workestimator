<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        return view('categories.create');
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
            'name' => 'required|string|max:255|unique:categories',
        ]);
        
        Category::create($validated);
        
        return redirect()->route('categories.index')
            ->with('success', 'カテゴリが作成されました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $category = Category::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
        ]);
        
        $category->update($validated);
        
        return redirect()->route('categories.index')
            ->with('success', 'カテゴリが更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $category = Category::findOrFail($id);
        
        if ($category->works()->count() > 0) {
            return redirect()->route('categories.index')
                ->with('error', 'このカテゴリは実績で使用されているため削除できません。');
        }
        
        $category->delete();
        
        return redirect()->route('categories.index')
            ->with('success', 'カテゴリが削除されました。');
    }
}

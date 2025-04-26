<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        if (!Auth::user()->isAdmin()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('register');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id = null)
    {
        if ($id === null) {
            $user = Auth::user();
            $evaluations = $user->workEvaluations()->with('work')->get();
            return view('dashboard', compact('evaluations'));
        }
        
        $user = User::findOrFail($id);
        
        if (Auth::id() != $id && !Auth::user()->isAdmin()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $evaluations = $user->workEvaluations()->with('work')->get();
        
        return view('users.show', compact('user', 'evaluations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() != $id && !Auth::user()->isAdmin()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() != $id && !Auth::user()->isAdmin()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $validated = $request->validate([
            'display_name' => 'required|string|max:255',
            'twitter_name' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);
        
        if (Auth::user()->isAdmin()) {
            $validated = array_merge($validated, $request->validate([
                'role' => 'required|in:admin,staff,general',
                'status' => 'required|in:active,inactive,deleted',
            ]));
        }
        
        $user->update($validated);
        
        return redirect()->route('users.show', $user->id)
            ->with('success', 'ユーザー情報が更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() != $id && !Auth::user()->isAdmin()) {
            return redirect()->route('dashboard')->with('error', '権限がありません。');
        }
        
        $user->update([
            'display_name' => '*****',
            'email' => '*****' . $user->id . '@deleted.user',
            'twitter_name' => null,
            'bio' => null,
            'status' => 'deleted',
        ]);
        
        if (Auth::id() == $id) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        
        return redirect()->route('users.index')
            ->with('success', 'ユーザーが削除されました。');
    }
}

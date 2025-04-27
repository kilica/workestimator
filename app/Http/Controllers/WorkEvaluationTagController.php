<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkEvaluationTagController extends Controller
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
        
        $evaluationTags = [
            'helped' => '助かりました〜',
            'grateful' => '圧倒的感謝',
            'amazing' => 'すごすぎ！',
            'expectation' => '期待してます',
            'kind' => '優しい〜',
            'genius' => '天才！？',
            'encouragement' => '頑張れ！',
            'perfect_score' => '100点満点！',
            'excellent' => '最高です',
            'good_work' => 'お疲れ様でした',
        ];
        
        return view('work-evaluation-tags.index', compact('evaluationTags'));
    }
}

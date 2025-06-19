<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\WorkEvaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkEvaluationController extends Controller
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
        $evaluations = WorkEvaluation::with(['work', 'user'])
            ->where('is_visible', true)
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('work-evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workId = request('work_id');
        
        if (!$workId) {
            return redirect()->route('works.index')
                ->with('error', '実績が指定されていません。');
        }
        
        $work = Work::findOrFail($workId);
        
        $existingEvaluation = WorkEvaluation::where('work_id', $workId)
            ->where('user_id', Auth::id())
            ->first();
            
        if ($existingEvaluation) {
            return redirect()->route('work-evaluations.edit', $existingEvaluation->id)
                ->with('info', 'すでに評価を投稿しています。編集してください。');
        }
        
        return view('work-evaluations.create', compact('work'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'work_id' => 'required|exists:works,id',
            'interest_level' => 'required|integer|min:1|max:3',
            'evaluation_rating' => 'required|integer|min:1|max:3',
            'helped' => 'boolean',
            'grateful' => 'boolean',
            'amazing' => 'boolean',
            'expectation' => 'boolean',
            'kind' => 'boolean',
            'genius' => 'boolean',
            'encouragement' => 'boolean',
            'perfect_score' => 'boolean',
            'excellent' => 'boolean',
            'good_work' => 'boolean',
            'comment' => 'nullable|string',
        ]);
        
        $hasEvaluation = ($validated['helped'] ?? false) || ($validated['grateful'] ?? false) || ($validated['amazing'] ?? false) || 
                         ($validated['expectation'] ?? false) || ($validated['kind'] ?? false) || ($validated['genius'] ?? false) || 
                         ($validated['encouragement'] ?? false) || ($validated['perfect_score'] ?? false) || 
                         ($validated['excellent'] ?? false) || ($validated['good_work'] ?? false);
                         
        if (!$hasEvaluation) {
            return back()->withInput()->withErrors(['evaluation' => '少なくとも1つの評価を選択してください。']);
        }
        
        $existingEvaluation = WorkEvaluation::where('work_id', $validated['work_id'])
            ->where('user_id', Auth::id())
            ->first();
            
        if ($existingEvaluation) {
            return redirect()->route('work-evaluations.edit', $existingEvaluation->id)
                ->with('info', 'すでに評価を投稿しています。編集してください。');
        }
        
        $validated['user_id'] = Auth::id();
        
        $evaluation = WorkEvaluation::create($validated);
        
        return redirect()->route('works.show', $validated['work_id'])
            ->with('success', '評価が投稿されました。');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evaluation = WorkEvaluation::findOrFail($id);
        return redirect()->route('works.show', $evaluation->work_id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evaluation = WorkEvaluation::with('work')->findOrFail($id);
        
        if (Auth::id() != $evaluation->user_id) {
            return redirect()->route('works.show', $evaluation->work_id)
                ->with('error', '権限がありません。');
        }
        
        return view('work-evaluations.edit', compact('evaluation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evaluation = WorkEvaluation::findOrFail($id);
        
        if (Auth::id() != $evaluation->user_id) {
            return redirect()->route('works.show', $evaluation->work_id)
                ->with('error', '権限がありません。');
        }
        
        $validated = $request->validate([
            'interest_level' => 'required|integer|min:1|max:3',
            'evaluation_rating' => 'required|integer|min:1|max:3',
            'helped' => 'boolean',
            'grateful' => 'boolean',
            'amazing' => 'boolean',
            'expectation' => 'boolean',
            'kind' => 'boolean',
            'genius' => 'boolean',
            'encouragement' => 'boolean',
            'perfect_score' => 'boolean',
            'excellent' => 'boolean',
            'good_work' => 'boolean',
            'comment' => 'nullable|string',
        ]);
        
        $hasEvaluation = ($validated['helped'] ?? false) || ($validated['grateful'] ?? false) || ($validated['amazing'] ?? false) || 
                         ($validated['expectation'] ?? false) || ($validated['kind'] ?? false) || ($validated['genius'] ?? false) || 
                         ($validated['encouragement'] ?? false) || ($validated['perfect_score'] ?? false) || 
                         ($validated['excellent'] ?? false) || ($validated['good_work'] ?? false);
                         
        if (!$hasEvaluation) {
            return back()->withInput()->withErrors(['evaluation' => '少なくとも1つの評価を選択してください。']);
        }
        
        $evaluation->update($validated);
        
        return redirect()->route('works.show', $evaluation->work_id)
            ->with('success', '評価が更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evaluation = WorkEvaluation::findOrFail($id);
        
        if (Auth::id() != $evaluation->user_id) {
            return redirect()->route('works.show', $evaluation->work_id)
                ->with('error', '権限がありません。');
        }
        
        $evaluation->delete();
        
        return redirect()->route('works.show', $evaluation->work_id)
            ->with('success', '評価が削除されました。');
    }
    
    /**
     * Toggle visibility of an evaluation (for admin/staff to hide spam).
     */
    public function toggleVisibility(string $id)
    {
        $evaluation = WorkEvaluation::findOrFail($id);
        
        if (!Auth::user()->isAdmin() && !Auth::user()->isStaff()) {
            return redirect()->route('works.show', $evaluation->work_id)
                ->with('error', '権限がありません。');
        }
        
        $evaluation->update([
            'is_visible' => !$evaluation->is_visible,
        ]);
        
        $status = $evaluation->is_visible ? '表示' : '非表示';
        
        return redirect()->route('works.show', $evaluation->work_id)
            ->with('success', "評価を{$status}にしました。");
    }
}

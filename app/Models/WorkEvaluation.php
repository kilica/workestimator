<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkEvaluation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'work_id',
        'user_id',
        'interest_level',
        'evaluation_rating',
        'helped',
        'grateful',
        'amazing',
        'expectation',
        'kind',
        'genius',
        'encouragement',
        'perfect_score',
        'excellent',
        'good_work',
        'comment',
        'is_visible',
    ];
    
    /**
     * Get the work that owns the evaluation.
     */
    public function work()
    {
        return $this->belongsTo(Work::class);
    }
    
    /**
     * Get the user that owns the evaluation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

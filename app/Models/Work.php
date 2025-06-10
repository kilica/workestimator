<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'cover_image',
        'category_id',
        'difficulty_rating',
        'impact_rating',
        'progress_rating',
        'background',
        'achievement',
        'improvements',
        'related_videos',
        'faq',
        'user_id',
    ];
    
    /**
     * Get the user that owns the work.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the category that owns the work.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    /**
     * Get the tags for the work.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'work_tag');
    }
    
    /**
     * Get the evaluations for the work.
     */
    public function evaluations()
    {
        return $this->hasMany(WorkEvaluation::class);
    }
}

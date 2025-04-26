<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    
    /**
     * Get the works for the tag.
     */
    public function works()
    {
        return $this->belongsToMany(Work::class, 'work_tag');
    }
}

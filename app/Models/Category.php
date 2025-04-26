<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    
    /**
     * Get the works for the category.
     */
    public function works()
    {
        return $this->hasMany(Work::class);
    }
}

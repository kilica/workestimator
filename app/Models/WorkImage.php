<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{
    use HasFactory;
    
    protected $fillable = ['work_id', 'image_path', 'sort_order'];
    
    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}

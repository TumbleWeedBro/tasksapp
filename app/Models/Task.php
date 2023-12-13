<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    
    protected $fillable =[
        'task_title',
        'task_content',

    ];

    protected $hidden =[
        'id',
        'user_id',
        // 'slug',

    ];

    public function catrgory(){
        return $this->belongsTo(Category::class);
    }

}

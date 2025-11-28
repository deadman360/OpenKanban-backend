<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TodoItem extends Model
{
    /** @use HasFactory<\Database\Factories\TodoItemFactory> */
    use HasFactory;

    protected $fillable = [
        'task_id',
        'name',
        'description',
        'is_complete'
    ];

    public function task() : BelongsTo
    {
        return $this->belongsTo(Task::class, "task_id");
    }

}

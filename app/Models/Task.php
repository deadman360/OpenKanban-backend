<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'board_id',
        'created_by_id',
        'assigned_to_id',
        'status_id',
        'name',
        'description',
        'due_date',
        'estimated_hours',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function createdBy() : BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function assignedTo() : BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }

    public function status() : BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function board() : BelongsTo
    {
        return $this->belongsTo(Board::class, 'board_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'completed',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ownedBy(User $user) {
        return $user->id === $this->user_id;
    }
}

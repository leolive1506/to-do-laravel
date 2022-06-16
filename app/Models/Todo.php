<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';
    protected $fillable = ['name', 'description', 'file', 'completed', 'user_id', 'file_extension', 'remember_at', 'cost'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

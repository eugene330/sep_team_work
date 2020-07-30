<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'finish_date', 'title', 'text', 'arhiv',
    ];

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'teacher_user_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}

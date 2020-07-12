<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'text', 'rate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_user_id');
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'teacher_user_id');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'groups_students',
            'group_id',
            'student_user_id'
        );
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

}

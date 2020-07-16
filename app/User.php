<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'second_name', 'password', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pass', 'remember_token',
    ];

    public function groupsTeacher()
    {
        return $this->hasMany(Group::class, 'teacher_user_id');
    }

    public function groupsStudents()
    {
        return $this->belongsToMany(
            Group::class,
            'groups_students',
            'student_user_id',
            'group_id'
        );
    }

    public function task()
    {
        return $this->hasMany(Task::class, 'student_user_id');
    }

    public function answer()
    {
        return $this->hasOne(Answer::class, 'student_user_id');
    }
}

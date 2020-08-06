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
        'name','invite'
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_user_id');
    }

    public function students()
    {
        return $this->belongsToMany(
            User::class,
            'groups_students',
            'group_id',
            'student_user_id'
        );
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}

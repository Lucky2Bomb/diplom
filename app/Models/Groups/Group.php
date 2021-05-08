<?php

namespace App\Models\Groups;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'start_date',
        'end_date',

        'is_closed',

        'group_form_of_studying_type',
        'university_name',
        'faculty_name',
        'specialty_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'updated_at'    => 'datetime',
        'created_at'    => 'datetime',
        'start_date'    => 'datetime',
        'end_date'      => 'datetime',
        'is_closed'     => 'boolean'
    ];

    public function groupFormOfStudying()
    {
        return $this->belongsTo(GroupFormOfStudying::class);
    }

    public function groupUniversity()
    {
        return $this->belongsTo(GroupUniversity::class);
    }

    public function groupFaculty()
    {
        return $this->belongsTo(GroupFaculty::class);
    }

    public function groupSpecialty()
    {
        return $this->belongsTo(GroupSpecialty::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}

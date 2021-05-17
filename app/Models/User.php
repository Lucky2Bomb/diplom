<?php

namespace App\Models;

use App\Models\Groups\Group;
use App\Models\Publications\Publication;
use App\Models\Publications\PublicationComment;
use App\Models\Publications\PublicationComplaint;
use App\Models\Publications\PublicationNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'patronymic',

        'slug',
        'login',
        'email',
        'password',

        'avatar',
        'header_background_image',

        'vk',
        'ok',
        'facebook',
        'telegram',
        'phone_number',

        'position_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'deleted_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'updated_at'        => 'datetime',
        'created_at'        => 'datetime',
        'deleted_at'        => 'datetime'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function guestRequests()
    {
        return $this->hasMany(GuestRequest::class);
    }

    public function userSubscribers()
    {
        return $this->hasMany(UserSubscriber::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function publicationComplaints()
    {
        return $this->hasMany(PublicationComplaint::class);
    }

    public function publicationComments() {
        return $this->hasMany(PublicationComment::class);
    }

    public function publicationNotifications() {
        return $this->hasMany(PublicationNotification::class);
    }
}

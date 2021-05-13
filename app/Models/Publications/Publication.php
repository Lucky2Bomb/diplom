<?php

namespace App\Models\Publications;

use App\Models\Publications\PublicationComment;
use App\Models\Publications\PublicationComplaint;
use App\Models\Publications\PublicationNotification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'description',
        'preview_image',
        'preview_text',
        'is_published',
        'user_id',
        'published_at',
        'created_at',
        'updated_at',
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
        'published_at'  => 'datetime',
        'is_published'  => 'boolean',
        'user_id'       => 'integer'
    ];


    public function publicationComments()
    {
        return $this->hasMany(PublicationComment::class);
    }

    public function publicationComplaints()
    {
        return $this->hasMany(PublicationComplaint::class);
    }

    public function publicationNotifications()
    {
        return $this->hasMany(PublicationNotification::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

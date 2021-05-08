<?php

namespace App\Models\Publications;

use App\Models\Publication\Publication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationComment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'publication_id',
        'user_id',
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
        'updated_at'        => 'datetime',
        'created_at'        => 'datetime',
        'publication_id'    => 'integer',
        'user_id'           => 'integer',
    ];

    public function notifications() {
        return $this->hasMany(PublicationNotification::class);
    }

    public function publication() {
        return $this->belongsTo(Publication::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

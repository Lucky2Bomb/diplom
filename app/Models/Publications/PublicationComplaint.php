<?php

namespace App\Models\Publications;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationComplaint extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'is_checked',

        'user_id',
        'publication_id'
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
        'is_checked'        => 'boolean',
        'user_id'           => 'integer',
        'publication_id'    => 'integer',
    ];

    public function publication() {
        return $this->belongsTo(Publication::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

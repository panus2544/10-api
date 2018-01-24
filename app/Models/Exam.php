<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [
        'created_at', 'updated_at'
    ];

    public function profile_camper()
    {
        return $this->belongsTo('App\ProfileCamper', 'user_id', 'user_id');
    }
}

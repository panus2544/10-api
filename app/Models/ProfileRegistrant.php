<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileRegistrant extends Model
{
    protected $guarded = [
        'created_at', 'updated_at'
    ];

    public function profile() {
        return $this->belongsTo('App/Profile', 'id', 'user_id');
    }

    public function evals_denorm()
    {
        return $this->hasOne('App/EvalsDenorm', 'user_id', 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    public function form() {
        return $this->belongsTo('Forms');
    }

    public function user() {
        return $this->hasOne('User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['form_fields'];

    public function form() {
        return $this->belongsTo('Form');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}

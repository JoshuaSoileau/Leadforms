<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['form_fields'];

    public function leadform() {
        return $this->belongsTo('Leadform');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}

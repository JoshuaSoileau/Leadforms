<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leadform extends Model
{
    protected $fillable = [
        'header',
        'subheader',
        'form_fields',
        'button_text',
        'image',
        'ty_header',
        'ty_subheader',
        'magnet'
    ];

    public function user() {
        return $this->belongsTo('User');
    }

    public function leads() {
        return $this->hasMany('Lead');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $allowedAttributes = [
        'name', 'image', 'text', 'type'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['title', 'image', 'client', 'description', 'technology', 'released'];
}

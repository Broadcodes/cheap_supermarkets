<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Supermarket extends Model
{
    protected $fillable = ['name', 'address', 'civic', 'city', 'postal_code'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'gender', 'birth', 'tel', 'address', 'mail', 'job', 'company'];
}

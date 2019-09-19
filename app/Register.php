<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Register extends Model
{
    protected $table = 'registers';
    protected $fillable = ['fullname', 'phone', 'email', 'address', 'page'];
}

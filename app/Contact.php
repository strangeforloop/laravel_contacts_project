<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
    'name',
    'email',
    'phone',
    'country',
    'city',
    'state',
    'zip_code',
  ];
}

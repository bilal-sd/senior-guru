<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries_list';
    protected $fillable = ['name', 'code'];
}

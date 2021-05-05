<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $primary_key = "id";
    protected $fillable = ['id', 'servis'];
}

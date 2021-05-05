<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $table = "kurirs";
    protected $primary_key = "id";
    protected $fillable = ['id', 'nama', 'hp'];
}

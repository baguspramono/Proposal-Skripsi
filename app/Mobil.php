<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = "mobils";
    protected $primary_key = "id";
    protected $fillable = ['id', 'nama', 'plat'];
}

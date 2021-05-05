<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedisi extends Model
{
    protected $table = "expedisis";
    protected $primary_key = "id";
    protected $fillable = ['id', 'kode'];
}

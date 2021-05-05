<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    protected $table = "jalurs";
    protected $primary_key = "id";
    protected $fillable = ['id', 'jalur'];
}

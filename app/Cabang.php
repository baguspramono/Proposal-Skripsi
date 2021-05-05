<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = "cabangs";
    protected $primary_key = "id";
    protected $fillable = ['id', 'nama', 'asal', 'alamat'];
}

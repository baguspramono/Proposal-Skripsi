<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barangs";
    protected $primary_key = "id";
    protected $fillable = ['id', 'nama', 'berat', 'jenis'];
}

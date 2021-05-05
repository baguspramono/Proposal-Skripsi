<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "members";
    protected $primary_key = "id";
    protected $fillable = ['id', 'nama', 'hp', 'alamat'];
}

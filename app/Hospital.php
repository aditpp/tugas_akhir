<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['rumah_sakit', 'kapasitas', 'alamat', 'wilayah'];
}

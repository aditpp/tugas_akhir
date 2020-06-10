<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    protected $fillable = ['wilayah', 'positif', 'meninggal', 'sembuh'];
}

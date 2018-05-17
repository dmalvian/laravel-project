<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'regencies';

    protected $primarykey = 'id';

    public $timestamps = false;
}

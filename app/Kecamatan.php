<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'districts';

    protected $primarykey = 'id';

    public $timestamps = false;
}

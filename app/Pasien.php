<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'tbl_pasien';

    protected $primarykey = 'no_ktp';

    public $timestamps = false;
}

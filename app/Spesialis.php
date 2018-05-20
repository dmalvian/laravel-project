<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    protected $table = 'tbl_spesialis';

    protected $primarykey = 'kode_spesialis';

    public $incrementing = false;
}

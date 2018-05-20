<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'tbl_dokter';

    protected $primarykey = 'NIDN';

    public $incrementing = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RS extends Model
{
    protected $table = 'tbl_rs';

    protected $primarykey = 'kode_RS';

    public $incrementing = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'tbl_akun';

    protected $primarykey = 'Id_akun';

    public $timestamps = false;

    public $incrementing = false;
}

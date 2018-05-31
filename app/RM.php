<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RM extends Model
{
    protected $table = 'tbl_rm';

    protected $primarykey = 'id';

    public $timestamps = false;
}

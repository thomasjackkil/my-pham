<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHDBan extends Model
{
    //
    protected $table = 'ct_hd_ban';

    public $timestamps = false;

    protected $primaryKey = 'ma_ct_hdb';
}

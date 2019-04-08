<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    // added by me
    protected $fillable = [
        'share_name',
        'share_price',
        'share_qty'
    ];
}

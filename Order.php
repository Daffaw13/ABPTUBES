<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Model
{
    protected $guarded=[];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class,'id_tiket');
    }
}

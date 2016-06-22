<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	public $timestamps = false;

 	protected $table = "pedido";

    protected $fillable = [
        'user_id', 'monto_total', 'status',
    ];


}

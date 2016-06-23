<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
	public $timestamps = false;

	protected $table = "carrito";

	protected $primaryKey = 'carrito_id';  

    protected $fillable = [
        'user_id', 'menu_id', 'cantidad', 'precio_total'
    ];

	public function menu()
    {
        return $this->hasMany('App\\Menu','menu_id');
    }

}

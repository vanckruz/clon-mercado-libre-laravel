<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	public $timestamps = false;

	protected $table = "menu";

	protected $primaryKey = 'menu_id';  

    protected $fillable = [
        'menu_nombre', 'menu_precio', 'menu_imagen',
    ];

	public function carrito()
    {
        return $this->belongsTo('App\\Menu',$this->primaryKey);
    }

}

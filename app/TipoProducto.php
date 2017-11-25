<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
 public $table='tipoProductos';  


   public function products(){
   	return $this->hasMany('App\Product','tipo_producto');

   }
}

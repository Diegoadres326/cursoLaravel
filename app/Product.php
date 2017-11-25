<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

protected  $guarded=[];

public function scopeHasStock($query){
	return $query->where('cantidad','>',0);
}

public function scopeHasActive($query){
	return $query->where('estado','=','1');
}


public function scopeTraerConTipo(){


}
public function tipo(){
	return $this->belongsTo('App\TipoProducto','tipo_producto');
}

}



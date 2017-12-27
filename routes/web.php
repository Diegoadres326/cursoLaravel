<?php

use App\Product;

use App\TipoProducto;
use Illuminate\Http\Request;



/*
Route::get('/', function () {
   //return dd(TipoProducto::find(2)->products->toArray());
   //return dd(TipoProducto::with(['products'])->where('id','>',0)->get());

	$product1=Product::with('tipo')->get();

	//$products2 =$product1->filter(function )


});

Route::get('/ingresar', function () {
   return view('pages.ingresarProducto');
});*/

//Route::get('/products', function () {
   
 // $product1=Product::all();
 // dd($product1);
 //$product1=Product::hasStock()->get();

//$product1=Product::hasActive()->get();

 // $product1=Product::with('tipo')->get();
 //dd($product1);
  // return view('products',['productos'=>$product1]);


   //atado al controlador

//});

//normal
//Route::get('/products', 'ControladorProducto@index');

Route::resource('/products', 'ControladorProducto');
Route::resource('/tipo', 'tipoControlador');


//Route::get('welcome', function () {
  // return view('index');
//});

/*

Route::get('/products/{op}', function ($op) { 
if($op==1){
//$productos=Product::where('estado', 1);
	$productos=Product::select('*')->where('estado','=',1)->get();
}
if($op==2){
//$productos=Product::where('estado', 0)
 //			 ->orderBy('precio');
 $productos=Product::select('*')->where('estado','=',0)->orderBy('cantidad')->get();
			}
if($op==3){
//$productos=Product::orderBy('precio','desc');
 $productos=Product::select('*')->orderBy('cantidad','desc')->get();
}

	//$productos=Product::orderBy('precio','desc');
	//$productos=Product::all();
	//$productos=Product::orderBy('precio','desc');
	//$productos=Product::all();
   return view('products',['productos'=>$productos]);


});






//Route::post('/products', function (Request $request) {  
//	$validator=Validator::make($request->all(),[
	
//		'name'=>'required|max:15',
//		'cantidad'=>'required',
//		'precio'=>'required',
//		'estado'=>'required',
//		'tipo_producto'=>'required'
//		]);

//		if($validator ->fails()){
//			return redirect('/products')
//			->withInput()
//			->withErrors($validator);
//		}

//		$producto =new Product;
//		$producto->name=$request->name;
//		$producto->cantidad=$request->cantidad;
//		$producto->precio=$request->precio;
//		$producto->estado=$request->estado;
//		$producto->tipo_producto=$request->tipo_producto;
//		$producto->save();

//		return redirect('/products');

//});

Route::delete('/products/{id}', function ($id) {  
	Product::findOrFail($id)->delete();
	return redirect('/products');
});*/
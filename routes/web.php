<?php

use App\Product;
use Illuminate\Http\Request;


Route::get('/', function () {
   
   $product1=Product::all();
   dd($product1);

   return view('index');

});

Route::get('welcome', function () {
   return view('index');
});



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






Route::post('products', function (Request $request) {  
	$validator=Validator::make($request->all(),[
	
'name'=>'required|max:15',
'cantidad'=>'required',
'precio'=>'required',
'estado'=>'required'
]);

if($validator ->fails()){
	return redirect('/products')
	->withInput()
	->withErrors($validator);

}

$producto =new Product;
$producto->name=$request->name;
$producto->cantidad=$request->cantidad;
$producto->precio=$request->precio;
$producto->estado=$request->estado;
$producto->save();
return redirect('products');

});

//Route::delete('/products/{id}', function ($id) {  

//});
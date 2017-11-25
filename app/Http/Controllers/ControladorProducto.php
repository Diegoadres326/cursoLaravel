<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\TipoProducto;
class ControladorProducto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product1=Product::with('tipo')->get();
        return view('products',['productos'=>$product1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.ingresarProducto',['tipoProductos'=>TipoProducto::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);

        // $validator=Validator::make($request->all(),[
        // 'name'=>'required|max:15',
        // 'cantidad'=>'required',
        // 'precio'=>'required',
        // 'estado'=>'required',
        // 'tipo_producto'=>'required'
        // ]);
        //  if($validator ->fails()){
        //      return redirect('/products')
        //      ->withInput()
        //      ->withErrors($validator);
        // }


        // $producto =new Product;
        // $producto->name=$request->name;
        // $producto->cantidad=$request->cantidad;
        // $producto->precio=$request->precio;
        // $producto->estado=$request->estado;
        // $producto->tipo_producto=$request->tipo_producto;
        // $producto->save();
       

        try{
        Product::create([
         "name"=>$request->name,
        "cantidad"=>$request->cantidad,
        "precio"=>$request->precio,
        "estado"=>$request->estado,
        "tipo_producto"=>$request->tipo_producto
        ]);
        }catch(\Exception $e){
            return back()
                  ->withErrors(['Error','No se pudo ingresar'])
                  ->withInput();

        }

        return redirect('/products')
              ->with('success','¨Producto INgresado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

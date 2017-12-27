<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\TipoProducto;

class tipoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $tipos=TipoProducto::with('products')->get();
        return view('pages.tiposProducto',['tipos'=>$tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('pages.ingresarTipo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           try{
        TipoProducto::create([
         "nombre"=>$request->nombre,
        "estado"=>$request->estado,
    
        ]);
        }catch(\Exception $e){
            return back()
                  ->withErrors(['Error','No se pudo ingresar'])
                  ->withInput();

        }

        return redirect('/products')
              ->with('success','Tipo Ingresado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $Tipo=Tipo::where('id',$id)->get();
      //  dd($product1);
      //return view('pages.actualizarProducto',['producto'=>$product1]);
      return view('pages.tiposProducto',['tipos'=>$Tipo ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
               $Tipo=TipoProducto::findOrFail($id);
           // dd($product1);
          return view('pages.actualizarTipo',['tipo'=>$Tipo]);
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
            $tipo=TipoProducto::findOrFail($id);
            $tipo->nombre=$request->nombre;          
            $tipo->estado=$request->estado;         
            $tipo->save();
        return redirect('/tipo')
              ->with('success','Tipo Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                 TipoProducto::findOrFail($id)->delete();
            return redirect('/tipo')
               ->with('success','Se a eliminado un tipo de producto');
    }
}

<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Requests\ruleRequest;
use Illuminate\Contracts\Auth\Guard;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ruleRequest $request)
    {   
        $product = new Product();
        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->categoria = $request->categoria;
        $product->estado=$request->estado;

        $nombreImagen =  time()."_".$request->nombre.".jpg";
        $file = $request->file('imagenProducto');
        //Storage::putFileAs('file', new File('/path/uploads'), $nombreImagen);
        
        Storage::putFileAs('public', new File($file), $nombreImagen);

        $product->imagen = $nombreImagen;
        $product->save();

        return redirect()->route('adminproductos');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        
        return view('administrador.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ruleRequest $request, Product $product)
    {

        $product->update($request->all());
        return redirect()->route('adminproductos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product -> imagen); 
        $product->delete();
        return redirect()->route('adminproductos');
    }
    public function __construct(Guard $auth)
    {
        $this->middleware('auth');

    }
}

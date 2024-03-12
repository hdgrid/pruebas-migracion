<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Estoy en el ProductController';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //NO SERIA PARA CREAR UN PRODUCTO, SINO PARA GUIARNOS A LA PAGINA DONDE CREAMOS UN PRODUCTO
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //ESTE SI SERIA PARA CREAR UN PRODUCTO O NUEVA ENTRADA
    {
        //
    }

    /**
     * Display the specified resource. /sip, muestra producto basado en identificador/
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //no edita, muestra la pantalla donde vas a editar
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //este si edita o sirve para actualizar pues
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //borra
    {
        //
    }
}

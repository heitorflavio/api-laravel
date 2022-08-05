<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidosRequest;
use App\Http\Requests\UpdatePedidosRequest;
use App\Models\Pedidos;


class PedidosController extends Controller
{
    private $pedidosModel;
    public function __construct(Pedidos $pedidos)
    {
        $this->pedidosModel = $pedidos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = $this->pedidosModel->all();
        return response()->json($pedidos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePedidosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePedidosRequest $request)
    {
        //

        
        $pedidos = $this->pedidosModel->create($request->all());

        



      
        return response()->json($pedidos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePedidosRequest  $request
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePedidosRequest $request, Pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedidos $pedidos)
    {
        //
    }
}

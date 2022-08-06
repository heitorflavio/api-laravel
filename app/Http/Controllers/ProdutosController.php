<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprodutosRequest;
use App\Http\Requests\UpdateprodutosRequest;
use Illuminate\Http\Request;
use App\Models\produtos;

class ProdutosController extends Controller
{
    private $produtosModel;
    
    

    public function __construct(produtos $produtos)
    {
        $this->produtosModel = $produtos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd($request->query);
        $query= $request->query();
        // print_r(array_keys($query));
        // print_r(array_key_exists('categoria',$query));
        // $query = array_keys($query);
        if(array_key_exists('categoria',$query)){
            $produtos = $this->produtosModel->where('categoria',$query['categoria'])->get();
        }else{
            
            $produtos = $this->produtosModel->all();
        }
        
        return response()->json($produtos);


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
     * @param  \App\Http\Requests\StoreprodutosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprodutosRequest $request)
    {
        //
        $produtos = $this->produtosModel->create($request->all());
        return response()->json($produtos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show($request,produtos $produtos)
    {
        //
        $produtos = $this->produtosModel->find($request);
        return response()->json($produtos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprodutosRequest  $request
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update($id,StoreprodutosRequest $request)
    {
        //
        $produtos = $this->produtosModel->find($id);
        $produtos->update($request->all());
        return response()->json($produtos);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(produtos $produtos)
    {
        //
    }
}

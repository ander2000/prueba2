<?php

namespace App\Http\Controllers;

use App\Models\buscador;
use Illuminate\Http\Request;

// require  '../../vendor/serpapi/google-search-results-php/google-search-results';
// use ;
use GoogleSearchResults;



class BuscadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $valorBusqueda = $request->value;
        if (!$valorBusqueda) {
            return response()->json("error, busqueda nula");
        }
        $client = new GoogleSearchResults("95a5240d3ba0be4f983df31eac2085c49521ecd48f02d4aff1af0c33824cb02a");
        // return response()->json($valorBusqueda);
        $query = ["q" =>  $valorBusqueda];
        $response = $client->get_json($query);
        return response()->json($response->organic_results);
        print_r( base_path('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(buscador $buscador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buscador $buscador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buscador $buscador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buscador $buscador)
    {
        //
    }
}

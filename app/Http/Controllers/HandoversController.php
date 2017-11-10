<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Services\ProductsService;
use Input;
use Response;

class HandoversController extends Controller
{
    public $Products;


    public function __construct(ProductsService $ProductsService)

    {
        $this->Products = $ProductsService;
    }

    public function index()
    {
        $Activity = $this->Products->activities();
        return view('handovers.index',compact('Activity'));
    }
    public function create()
    {
        
    }
    public function searchPIS(Request $request)
    {
        
    }

   
    public function store(Request $request)
    {
        //
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

    public function autocomplete()
    {

    $term = Input::get('term');
    
    $results = array();
    
    $queries = Product::where('name', 'LIKE', '%'.$term.'%')
        ->orWhere('specification', 'LIKE', '%'.$term.'%')
        ->take(10)->get();
    
    foreach ($queries as $query)
    {
        $results[] = [ 'id' => $query->id, 'value' => $query->name.' '.$query->specification ];
    }
    return Response::json($results);
    }

    public function destroy($id)
    {
        //
    }
}

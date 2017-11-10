<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductsService;
use App\Services\RecipientsService;
use DB;
use Redirect;
use App\Product;
use Input;
use Auth;

class ProductsController extends Controller
{
    public $Products;
  

   public function __construct(ProductsService $ProductsService)

   {
    	$this->Products = $ProductsService;
   }

   public function index()
   {
   		$inventory = $this->Products->getPIS();
      dd($inventory);
      die();
       return view('products.index',compact('inventory'));
   }	

   public function create(Request $request)
   {

      $newProduct = $this->Products->store($request);
   	  return Redirect::to('/products')->with('success','Item created successfully!');
   }

	public function searchPIS()
	{
        $query    =\Input::get('q');
        $products =\DB::table('products')
            ->join('product_types','products.type_id','=','product_types.id')
            ->whereRaw(
                "CONCAT(`products`.`name`, ' ', `products`.`specification` , ' ', `products`.`type_id`) LIKE '%{$query}%'")
            ->select(
                        array
                        (
                            'products.id as id',
                            'products.name as name',
                            'products.specification as specification',
                            'product_types.name as product_type',

                        )
                            )
                    ->get();
        $data = array();
        foreach ($products as $product) {
            $data[] = array
            (
                "name" => "{$product->name} >{$product->product_type}> {$product->specification}" ,
                "id" => "{$product->id}",
                "specification" => "{$product->specification}",
            );
        }
        return $data;

    }

    public function createType(Request $request)
    {

      $newProductType = $this->Products->createType($request);
      return Redirect::to('/products');
    }
    

    public function storeActivity(Request $request)
    
    {
        $Activity = $this->Products->storeActivity($request);
      return Redirect::to('/handovers');
    }

    public function showActivities()
    {
        $Activity = $this->Products->activities();
        dd($Activity);
        die();
        return view('handovers.index',compact('Activity'));
    }




    public function deleteProduct()
    {

    }
    





}

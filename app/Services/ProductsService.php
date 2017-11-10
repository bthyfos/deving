<?php


namespace App\Services;
use App\Recipient;
use App\Product;
use App\Activity;
use App\ProductType;
use Auth;
use DB;



class ProductsService
{
   
   public function getPIS()
   {


      $products =\DB::table('products')
          ->join('product_types','product_types.id' ,'=','products.type_id')
          ->select('products.name','products.specification','product_types.slug','products.unit')
          ->groupBy('products.name','products.unit','products.specification','product_types.slug','products.unit')
          ->get();
    return    $products;

    }

   public function store($request)
   {

   	  $productObj					        = new Product();
   	  $productObj->name  			   =$request['name'];
   	  $productObj->type_id  		  =$request['type_id'];
   	  $productObj->specification	=$request['specification'];
   	  $productObj->ordered_date 	=$request['ordered_date'];
   	  $productObj->received_date  =$request['received_date'];
   	  $productObj->price 			    =$request['price'];
      $productObj->unit          =$request['unit'];
   	  $productObj->save();
   	  return $productObj;

   }

   public function createType($request)
   {
      $productType            =new ProductType();
      $productType->name      =$request['name'];
      $productType->slug      =$productType->name;
      $productType->save();
      return $productType;
   }

    public function storeActivity($request)
   {

       $recipient                     =Recipient::find($request['name']);
       $product                       =Product::find($request['product']);

        $productObj                    = new Activity();
        $productObj->recipient         =$recipient->name . " ". $recipient->surname;
        $productObj->product_type      =$product->name;
        $productObj->product_name      =$request['product_name'];
        $productObj->user_id           =Auth::user()->name ." ". Auth::user()->surname;
         $productObj->save();

          $handovers      =Product::find($request['product']);
          $handovers->delete();



        return $productObj;

   }

    public function activities()
    {
        return Activity::all();
    }
}


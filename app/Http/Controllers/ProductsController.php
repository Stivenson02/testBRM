<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\mark;
use App\embargo;
use App\products_by_marks;
use App\inventory;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

     public function index()
    {
    	$allDataProducts=products_by_marks::all();
    	foreach ($allDataProducts as $value) {
    		$value->model_mark;
    		$value->model_product;
    	}
    	
       return view('home', ['allproducts'=>$allDataProducts]);    
   }
   
     public function viewAddproduct()
   {

   		return view('product.insert',['all_mark'=>mark::all()]);  
   }
    public function addproduct(Request $data)
   {
   		$the_mark=mark::where('code',$data->mark)->first();

   		$new_product = new product();
   		$new_product->name= $data->name;
		$new_product->save();

   		$coste_produc= new products_by_marks();
   		$coste_produc->value=$data->coste;
   		$coste_produc->mark_id=$the_mark->id;
   		$coste_produc->product_id=$new_product->id;
   		$coste_produc->save();
    	return redirect('/');
   }

    public function viewEditProduc($id_product)
   {
    	$uni_product=products_by_marks::find($id_product);
    	$uni_product->model_mark;
    	$uni_product->model_product;

      $embar=embargo::where('product_id', $id_product);
      if ($embar->exists()) {
       $selc=0;
      }else{
        $selc=1;
      }
    	return view('product.edit',['detail_product'=>$uni_product,'all_mark'=>mark::all(),'selec'=>$selc]);  

   }
     public function EditProduc(Request $data,$id_product)
   {
   		$the_mark=mark::where('code',$data->mark)->first();

    	$coste_produc=products_by_marks::find($id_product);
    	$coste_produc->value=$data->coste;
    	$coste_produc->mark_id=$the_mark->id;
    	
    $coste_produc->model_product->name= $data->name;
		$coste_produc->save();
		$coste_produc->model_product->save();

		return redirect('/');

   }
      public function deleteEmbargo($id_product)
   {
      $the_embargo=embargo::where('product_id',$id_product)->delete();


    return redirect()->route('view_edit_product_phat',$id_product);

   }

      public function  deleteProduct($id_product)
   {
      $the_inventory=inventory::where('product_id',$id_product)->delete();
      $the_marks=products_by_marks::where('product_id',$id_product)->delete();
      $the_product=product::find($id_product)->delete();

      return redirect('/');
   }
  
	}

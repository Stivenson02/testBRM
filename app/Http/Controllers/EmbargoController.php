<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\embargo;

class EmbargoController extends Controller
{
   public function index(){
    $allDataEmbargo=embargo::all();
    foreach ($allDataEmbargo as  $value) {
    	$value->model_product;
    }
    return view('embargo.index', ['allembargo'=>$allDataEmbargo]);    
   }

  public function deleteEmbargo($id_embargo){
    $allDataEmbargo=embargo::find($id_embargo)->delete();  

    return redirect()->route('embargos_phat');
   }

   public function viewAddEmbargo(){

    return view('embargo.insert',['allProducts'=>product::all()]);  
   }

    public function AddEmbargo(Request $data){

    	$validate = embargo::where('product_id', $data->product);
    	if($validate->exists()){
    		$embargo = $validate->first();
    		$quantity=$embargo->quantity_total+ $data->quantity_total;
    	}else {
    		$embargo = new embargo();
    		$quantity=$data->quantity_total;
    	}
    	
    	$embargo->quantity_total= $quantity;
    	$embargo->date_embargo= $data->date_embargo;
    	$embargo->product_id= $data->product;
    	$embargo->save();

    return redirect()->route('embargos_phat');  
   }
   
   
}

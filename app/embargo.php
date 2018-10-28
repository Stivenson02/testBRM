<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;

class embargo extends Model
{
   public function model_product(){
    return $this->belongsTo(product::class,'product_id');
  }
}

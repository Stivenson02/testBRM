<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;
use App\mark;

class products_by_marks extends Model
{
   public function model_mark(){
    return $this->belongsTo(mark::class,'mark_id');
  }

   public function model_product(){
    return $this->belongsTo(product::class,'product_id');
  }
}

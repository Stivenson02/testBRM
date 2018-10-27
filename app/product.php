<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\mark;

class product extends Model
{
  
    public function by_mark() {
        return $this->belongsToMany(mark::class, "products_by_marks", 'mark_id', 'product_id');
    }
}

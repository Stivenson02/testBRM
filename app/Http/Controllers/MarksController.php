<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mark;
use App\products_by_marks;

class MarksController extends Controller
{
      public function index()
    {
    	$allDataMarks=mark::all()->where('id','!=',1);
    
       return view('marks.index', ['allmarks'=>$allDataMarks]);    
   }

    public function viewAddMark()
    {    
       return view('marks.insert');    
   }

 public function viewEditMark($id_mark)
    {    

       return view('marks.edit', ['datamark'=>mark::find($id_mark)]);    
   }

    public function editMark(Request $data, $id_mark)
    {    
      $mark=mark::find($id_mark);
      $mark->code=$data->code; 
      $mark->name=$data->name; 
      $mark->save();

      return redirect()->route('marks_phat');
         
   }
    public function addMark(Request $data)
    {    
      $mark= new mark();
      $mark->code=$data->code; 
      $mark->name=$data->name; 
      $mark->save();

      return redirect()->route('marks_phat');
   }

    public function deleteMark($id_mark)
    {    
      $mark= mark::find($id_mark);
      $producs=products_by_marks::where('mark_id', $id_mark);
      if ($producs->exists()) {
         foreach ($producs->get() as $value) {
          $value->mark_id= 1;
          $value->save();
        }
      }
     $mark->delete();

      return redirect()->route('marks_phat');
   }
   

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
class anony extends Controller
{
    //items appeared for anonymouse  users 
    public function all_items(Request $req){
        $data=item::all();
        return view('items')->with('items',$data);
      }
//search for items  in project 
      public function get_items_search(Request $req){
           $word=$req->input('t_word');
           $data=item::where('item_name','like','%'.$word.'%')
           ->orwhere('short_desc','=',$word)->get();
              return view('items')->with('items',$data);
      }
public function get_item_detail(Request $req){
  $id_value=$req->input('t_id');
  $data=item::where('id',$id_value)->get();
  return view('item_detail')->with('data',$data);
}
      }

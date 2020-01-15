<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier; //table of database
use App\item;
class supplier_control extends Controller
{

  public function __construct(){
    $this->middleware('middleware_approve');
  }
    //any clickable request Request $req
  

  public function profile_data(Request $req){
    $email_value=$req->session()->get('s_email');
    $all_data=supplier::where('email',$email_value)->get();
    //with represent a session for only one page and take all_data with it //
    return view('setting')->with('all_data',$all_data);
  }



  public function add_item(Request $req){
    $email_value=$req->session()->get('s_email');
    $item=new item;
    $item->item_name=$req->input('item_name');
    $item->price=$req->input('item_price');
    $item->supplier_email=$email_value;
    $item->item_photo=$req->file('item_photo')->store('item_img','public');
    $item->short_desc=$req->input('short_desc');
    $item->full_desc=$req->input('full_desc');
    $item->save();
    $all_data=supplier::where('email',$email_value)->get();
    return view('setting')->with('all_data',$all_data);


  }
//method used to get  profile data  for the supplier

  public function get_profile_data_to_edit(Request $req){
    $email_value=$req->session()->get('s_email');
    $all_data=supplier::where('email',$email_value)->get();
    //with represent a session for only one page and take all_data with it //
    return view('edit_profile')->with('all_data',$all_data);
  }
//method used to edit profile data  for the supplier
public function edit_profile(Request $req){
$email=$req->session()->get('s_email');
$s=supplier::where('email',$email)->update([
'supplier_name'=>$req->input('supplier_name'),
'phone'=>$req->input('phone'),
'password'=>$req->input('pass'),

'supplier_photo'=>$req->file('supplier_photo')->store('uploads','public')


]);
$all_data=supplier::where('email',$email)->get();
return view('setting')->with('all_data',$all_data);
}

//admin >>"reports , Edaret items , Edaret suppliers , edaret " site ,update item or edit,,my items 
public function delete(Request $req){
  $email=$req->session()->get('s_email');
$item_id=$req->input('t_id');
$up=item::where('id',$item_id)->delete();
//after updating data go to setting page with new values
$so=item::where('email',$email)->get();
return view('my_items')->with('all_data',$so);
}
///////////////////////supplier  my_items  /////////////////////////////////////////
public function supplier_items(Request $req){
  $email=$req->session()->get('s_email');
  $data=item::where('supplier_email',$email)->get();
  return view('supplier_items')->with('items',$data);

}
/////////////////////getting data to be viewed in edit_item////////////////////////
public function edit_item(Request $req){
  $id_value=$req->input('t_id');
  $data=item::where('id',$id_value)->get();
  return view('edit_item')->with('data',$data);
}
//////////////////////////////////////////////////////////////////
//method used to  done edit items  for the supplier

public function edit_item_done(Request $req){
  $email=$req->session()->get('s_email');
  $id_value=$req->input('t_id');
  $s=item::where([
                       ['supplier_email','=',$email],
                       ['id','=',$id_value]
                     ])->update([
  'item_name'=>$req->input('item_name'),
  'price'=>$req->input('item_price'),
  'short_desc'=>$req->input('short_desc'),
  'full_desc'=>$req->input('full_desc'),
  'item_photo'=>$req->file('item_photo')->store('uploads','public')

  ]);
$data=item::where('supplier_email',$email)->get();
return view('supplier_items')->with('items',$data);
}

//////////////////////////delete_items/////////////////////////////////////////
public function delete_item(Request $req){
  $email=$req->session()->get('s_email');
  $id_value=$req->input('t_id');
  $s=item::where([
    ['supplier_email','=',$email],
    ['id','=',$id_value]
  ])->delete();
  //after updating data go to setting page with new values
$so=item::where('supplier_email',$email)->get();
return redirect('supplier_items')->with('items',$so);
}
public function logout( Request $req){

}

}
//task :edit_item +my_items+delete_items+
//admin_side>> manage(items,suppliers,customers) Reports(item report , supplier report , customers report , purchase  )
//Active and deactive in items 
//update all items set items= Deactive where email = *******

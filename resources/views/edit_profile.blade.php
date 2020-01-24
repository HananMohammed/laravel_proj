
@extends('s_master.master')
@section('supplier_content')
@if(count($all_data)>0)
@foreach($all_data as $supplier)
<h1 style="font-style:11px;color:blue;margin-left:35%;margin-top:10px;">Edit profile Data</h1>
 <div class="space"></div>
{!! Form::open(['url' => 'edit_profile/update' , 'files' => true]) !!}
<div class="form-row" style="margin-left:10%;margin-top:50px;" id="mydiv">
<div class="form-group" id="mydiv"> 

  <lable> edit name</lable> {{Form::text('supplier_name',$supplier->supplier_name,['class'=>'form-control'])}}
    </div>
    <div class="form-group " id="mydiv">
    <lable>phone</lable>{{Form::text('phone',$supplier->phone,['class'=>'form-control'])}}
    </div>
    <br/>
    <div class="form-group" id="mydiv">
    <lable>password</lable> {{Form::password('pass',['class'=>'form-control awesome','placeholder'=>$supplier->password])}}
    </div>
    <br/>
     <div class="form-group col-md-12"style="margin-left:24%;" id="mydiv">
    <lable style="margin-left:-5%;">photo</lable>{{Form::file('supplier_photo',['class'=>'form-control-file','style'=>'margin-left:-5%;'])}}
    

    </div>
    <div class="form-group col-md-12"style="margin-left:25%;" id="mydiv">
    {{Form::submit('Save changes',['class'=>'btn btn-primary','style'=>'margin-left:20%;'])}}
    </div>
</div>
 {!! Form::close() !!}
@endforeach
@endif
@endsection

<style>
lable{
    color:#087EFC;
    font-family: "Times New Roman", Times, serif;
    font-size:20px;
}
#mydiv{
    width:70%;margin-left:20%;
 }
.space{width:100%;height:30px;}
</style>

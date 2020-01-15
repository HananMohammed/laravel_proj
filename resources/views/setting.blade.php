<style>
div{
    width:30%;
    float:right;
     margin-right:30%;
}
img{
     width:60%;height:150px;margin-top:20px; margin-bottom:20px;  border: 2px solid green;
    border-radius: 50%;margin-right:30%;
}

lable{
    color:#900020;font-size:20px;
}
</style>
@extends('s_master.master')
@section('supplier_content')
@if(count($all_data)>0)
@foreach($all_data as $supplier)
<div>
<img src="{{asset('storage/'.$supplier->supplier_photo)}}"style="height:200px;width:200px;border-radius:50%;"/>
<h5>    <lable>  Name : </lable>{{$supplier->supplier_name}} </h5>

<h5>  <lable> email :</lable> {{$supplier->email}} </h5>
<h5>   <lable> phone :</lable> {{$supplier->phone}} </h5>

</div>
@endforeach
@endif
@endsection()
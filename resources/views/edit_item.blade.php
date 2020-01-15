
@extends('s_master.master')
@section('supplier_content')
@if(count($data)>0)

@foreach($data as $item)
{!! Form::open(['url' => 'supplier_items/save' , 'files' => true]) !!}
<div class="form-row" style="margin-left:10%;margin-top:50px;width:70%;border:2px solid #7777;border-radius:5%;box-shadow:10px 10px 10px 10px #6666">
<div class="space" style="width:100%;height:30px;"></div>
<h2 style="color:#1AC8DB;margin-left:40%; ">Edit item </h2>
<div class="space" style="width:100%;height:30px;"></div>
<div class="form-group col-md-4"style="margin-left:10%;margin-top:10px;padding:10px;">
    {{Form::text('item_name',$item->item_name,['class'=>'form-control','placeholder'=>'item_name'])}}
    </div>
    <div class="form-group col-md-4"style="margin-left:10%;margin-top:10px;padding:5px;">
    {{Form::text('item_price',$item->price,['class'=>'form-control','placeholder'=>'item_Price'])}}
    </div>
    <br/>

    <div class="form-group col-md-8"style="margin-left:10%;margin-top:10px;padding:5px;">
    {{Form::text('short_desc',$item->short_desc,['class'=>'form-control','placeholder'=>'item short description'])}}
    </div>
    <br/>
    <div class="form-group col-md-9"style="margin-left:10%;margin-top:10px;padding:5px;height:40px;">
    {{Form::textarea('full_desc',$item->full_desc,['class'=>'form-control','placeholder'=>'item full description'])}}
    </div>
    <div class="space" style="width:100%;height:250px;"></div>
    <div class="custom-file"style="margin-left:20%;width:40%;">
    {{Form::file('item_photo',['class'=>'custom-file-label'])}}
    </div>
    <div style="display:none">  
    {{Form::text('t_id',$item->id,['class'=>'form-control' , 'placeholder'=>'search here'])}}
</div>
<div class="input-group-append"style="width:20%;">
 {{Form::submit('save',['class'=>'btn btn-outline-secondary'])}}
 </div>

    <div class="space" style="width:100%;height:30px;"></div>

</div>
{{!! Form::close() !!}}


@endforeach
@endif
@endsection
@extends('s_master.master')
@section('supplier_content')
@if(count($items)>0)
@foreach($items as $item)

<div class="card" style="width:300px;height:auto;float:left;margin-left:2%;margin-top:15px;">
  <img src="{{asset('storage/'.$item->item_photo)}}" class="card-img-top" alt="..."style="height:250px;">
  <div class="card-body">
    <h5 class="card-title">{{$item->item_name}}</h5>
    <h5 class="card-title">{{$item->price}}</h5>
    <p class="card-text" style="overflow:hidden;width:100%;height:70px;font-size:16px;"><lable style="color:blue;font-size:18px;font-family:bold;">short description:  </lable>{{$item->short_desc}}</p>
    <p class="card-text" style="overflow:hidden;width:100%;height:70px;"><lable style="color:blue;font-size:18px;font-family:bold;">full description:  </lable>{{$item->full_desc}}</p>

    <!----------------------------id for item details to be edit -------------------------------------->
    
 {!! Form::open(['url' => 'supplier_items/edit' ,'files'=>true])!!}

<div style="display:none">  
    {{Form::text('t_id',$item->id,['class'=>'form-control' , 'placeholder'=>'search here'])}}
</div>
{{form::submit('Edit  ',['class'=>'btn btn-primary','style'=>'margin-left:10%;'])}}
{!! Form::close() !!}
<!----------------------------id for item details to be edit -------------------------------------->


    <div style="float:right;margin-top:-55px;margin-right:20%;">
{!! Form::open(['url' => 'supplier_items/delete' ,'files'=>true])!!}

<div style="display:none">  
    {{Form::text('t_id',$item->id,['class'=>'form-control' , 'placeholder'=>'search here'])}}
</div>
{{form::submit('delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
</div>
  </div>
</div>

@endforeach
@endif
@endsection
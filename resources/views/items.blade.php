@extends('anony_layout.master')
@section('content')
<!--
<div class="form-row" > 
{!! Form::open(['url' => 'items/search'])!!}
<div class="form-group" style="margin-left:20%;width:270%;">
{{Form::text('t_word','',['class'=>'form-control' , 'placeholder'=>'search here'])}}
</div>
<div class="form-group"style="margin-top:-60px;margin-left:350%;">
{{form::submit('search',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
</div>
-->

@if(count($items)>0)
@foreach($items as $item)
<div class="card" style="width:300px;height:auto;float:left;margin-left:2%;margin-top:20px;margin-bottom:30px;">
  <img src="{{asset('storage/'.$item->item_photo)}}" class="card-img-top" alt="..." style="height:250px;">
  <div class="card-body">
    <h5 class="card-title">{{$item->item_name}}</h5>
    <h5 class="card-title">{{$item->price}}</h5>
    <p class="card-text" style="overflow:hidden;width:100%;height:70px;">{{$item->short_desc}}</p>
    <!----------------------------id for item details -------------------------------------->
    {!! Form::open(['url' => 'items/more' ,'files'=>true])!!}

<div style="display:none">  
    {{Form::text('t_id',$item->id,['class'=>'form-control' , 'placeholder'=>'search here'])}}
</div>
{{form::submit('More',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  </div>
</div>

@endforeach
@endif
<div style="width:100%;margin-top:1200px;"></div>

@endsection

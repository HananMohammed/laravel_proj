
@extends('anony_layout.master')
@section('content')
@if(count($data)>0)

@foreach($data as $item)
        <div class="space2"></div>
<section>
<div class="main_item_info">
    <div class="item_photo">
        <img src="{{asset('storage/'.$item->item_photo)}}">
    </div>
<div class="item_data">
    <h2>{{$item->item_name}}</h2>
    <p>item price:EGP.{{$item->item_name}}</p>

    <button>Buy Now</button>
</div> 
</div>
<div class="space"></div>
<div class="full_desc">
    <h2>Full Description</h2>
    <p>
    {{$item->full_desc}}
   
    </p>
</div>

<div class="space"></div>



</section>

@endforeach
@endif
@endsection
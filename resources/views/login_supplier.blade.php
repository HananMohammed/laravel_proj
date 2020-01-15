<style>
.space{
    width:100%;
    height:20px;
}
</style>
@extends('anony_layout.master')
@section('content')

{!! Form::open(['url' => 'login_supplier/login' , 'files' => true]) !!}
<div class="form-row" style="margin-left:40%;margin-top:50px;">

  <div class="form-group"style="width:50%;">
    <label for="exampleInputEmail1">Email address</label>
    {{Form::email('t_email','',['class'=>'form-control','placeholder'=>'user name' ,'style'=>'margin-left:-20%;'])}}

    </div>
    <div class="space"></div>
  <div class="form-group" style="width:50%;">
    <label for="exampleInputPassword1" >Password</label>
    {{Form::password('t_pass',['class'=>'form-control awesome','placeholder'=>'***********','style'=>'margin-left:-20%;'])}}

  </div>
  <div class="space"></div>

  <div class="form-group form-check">
  {{Form::submit('login',['class'=>'btn btn-outline-primary'])}}
  </div>
  <div class="space"></div>

</div>
{!! Form::close() !!}

@endsection
<style>
.space{
    width:100%;height:10px;
}
</style>
@extends('anony_layout.master')
@section('content')
<!-- instead of making form as it's not secure 
 we use library called laravel collective to secure front and backend 
         or include @src in the form 
         -------------------------------------
         'files'=>'true' let the form upload files like enctype='mulitpart/encode'
[] used to css
      for action of the form : 'url' => 'signup/save'   
         -->
        <script>
        AOS.init();
        </script>
<h1 style="font-style:11px;color:#087EFC;margin-left:25%;margin-top:10px;">supplier sign up</h1>
<div style="width:500px;margin-left:20%;">
<div class="space" data-aos="fade-left"></div>
{!! Form::open(['url' => 'signup/save','files'=>true])!!}
  {{Form::text('t_name','',['class'=>'form-control' , 'placeholder'=>'your Name'])}}
  <!--<div class="alert alert-danger">{{$errors->first('t_name')}}</div>-->

  <div class="space" ></div>
  {{Form::text('t_phone','',['class'=>'form-control' , 'placeholder'=>'your phone'])}}
  <div class="space" ></div>
  {{Form::email('t_email','',['class'=>'form-control' , 'placeholder'=>'your mail'])}}
  <div class="space" ></div>
  {{Form::password('t_pass',['class'=>'form-control' , 'placeholder'=>'*****'])}}
  <div class="space" ></div>
  {{Form::file('t_file',['class'=>'form-control-file', 'style'=>'margin-left:35%;'])}}
  <div class="space" ></div>
 {{form::submit('signup',['class'=>'btn btn-primary' , 'style'=>'margin-left:35%;'])}}
{!! Form::close() !!}
</div>
@endsection

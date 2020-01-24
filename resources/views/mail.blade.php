@extends('anony_layout.master')
@section('content')
<div style="width:500px;margin-left:20%;">
{!! Form::open(['url' => 'mail/save' , 'files'=>'true']) !!}
{{Form::text('t_name','',['class'=>'form-control' , 'placeholder'=>'name '])}}
{{Form::text('t_subject','',['class'=>'form-control' , 'placeholder'=>'subject'])}}
{{Form::textarea('t_message','',['class'=>'form-control' , 'placeholder'=>'message here'])}}
{{form::submit('send',['class'=>'btn btn-primary' , 'style'=>'margin-left:35%;'])}}
</div>
 {!! Form::close() !!}
@endsection
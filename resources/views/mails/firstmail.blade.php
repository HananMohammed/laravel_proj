@component('mail::message')
# this message from our supplier
<h1> Name: {{$data['t_name']}}</h1>
<h2> subject:{{$data['t_subject']}}</h2>
<h2> Message is : </h2>
<h3>  {{$data['t_message']}}</h3>
@endcomponent

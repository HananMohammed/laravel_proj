<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ehm-eg</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/items">items</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/login">customer</a>
          <a class="dropdown-item" href="/login_supplier">Supplier</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign up 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/register">customer</a>
          <a class="dropdown-item" href="/signup">Supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact us</a>
      </li>
    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
   -->
<div class="form-inline my-2 my-lg-0" > 
{!! Form::open(['url' => 'items/search'])!!}
<div class="form-group" style="margin-left:-80%;">
{{Form::text('t_word','',['class'=>'form-control mr-sm-2' , 'placeholder'=>'search here'])}}
</div>
<div class="form-group"style="margin-top:-40px;margin-left:40%;">
{{form::submit('search',['class'=>'btn btn-outline-success my-2 my-sm-0' ])}}
</div>
{!! Form::close() !!}
</div>

   
  </div>
</nav>
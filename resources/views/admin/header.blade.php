

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Manage Suppliers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_supplier">Add Supplier</a>
          <a class="dropdown-item" href="/edit_supplier">Edit Information </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/deactive">Deactive supplier</a>
        </div>
      </li>
       </li>

      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Manage Items
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_supplier">Add Supplier Item  </a>
          <a class="dropdown-item" href="/edit_supplier">Edit Item Information </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/deactive">Deactive Item </a>
        </div>
      </li>
       </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_supplier"> Suppliers  </a>
          <a class="dropdown-item" href="/edit_supplier">Items</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/deactive">Graph statistics/a>
        </div>
      </li>
       </li>



    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left:110%;">Search</button>
    </form>
  </div>
</nav>
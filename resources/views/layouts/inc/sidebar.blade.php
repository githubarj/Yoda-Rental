<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Tuzuru Car Rental
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="nav-item {{ Request::is('dashboard') ? 'active':''}} ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li> -->
          <li class="nav-item {{ Request::is('categories') ? 'active':''}} ">
            <a class="nav-link" href="{{  url('categories') }}">
              <i class="material-icons">person</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-category') ? 'active':''}} ">
            <a class="nav-link" href="{{  url('add-category') }}">
              <i class="material-icons">person</i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('products') ? 'active':''}} ">
            <a class="nav-link" href="{{  url('products') }}">
              <i class="material-icons">person</i>
              <p>Vehicles</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-products') ? 'active':''}} ">
            <a class="nav-link" href="{{  url('add-products') }}">
              <i class="material-icons">person</i>
              <p>Add Vehicle</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('users') ? 'active':''}}">
            <a class="nav-link" href="{{  url('users') }}">
              <i class="material-icons">content_paste</i>
              <p>Users</p>
            </a>
          </li>
 
        </ul>
      </div>
    </div>
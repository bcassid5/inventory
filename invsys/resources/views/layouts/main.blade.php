<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Management System')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!--Extra Dashboard CSS-->
    <link rel="stylesheet" type="text/css" href="/css/dashboard.css">

    <!--Map CSS-->
    <link rel="stylesheet" type="text/css" href="/css/map.css">

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png">

    <title>@yield('title', 'Management System')</title>

    <!--NavBar override position-->
    <style type="text/css">
      .navbar-nav .dropdown-menu {
        position: absolute;
      }  
    </style>
    

  </head>
  <body>    
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Management System</a>
      <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
      <!--
      <input type="text" class="form-control form-control-dark w-100" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button"><span data-feather="search"></span></button>
      </div>-->
      
      <ul class="navbar-nav px-3">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->first_name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">
                  <span data-feather="settings"></span>
                  Settings
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  <span data-feather="log-out"></span>
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </li>
        <!--<li class="nav-item text-nowrap">
          <a class="nav-link" href="#">
            <span data-feather="log-out"></span>
            Sign Out
          </a>
        </li>-->
      </ul>
    </nav>
        

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link {{ Request::is('products') || Request::is('collections') ? 'active' : '' }}" href="#productSub" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <span data-feather="shopping-cart"></span>
                    Products <span data-feather="chevron-down"></span>
                </a>
                <ul class="collapse list-unstyled" id="productSub">
                    <li class="nav-item">
                        <a class="nav-link dropped" href="/collections">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropped" href="/products">Inventory</a>
                    </li>
                </ul>
                {{--}
                <a class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="/products">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>--}}
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('orders') ? 'active' : '' }}" href="/orders">
                  <span data-feather="file"></span>
                  Orders 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('customers') ? 'active' : '' }}" href="/customers">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('bills') ? 'active' : '' }}" href="/bills">
                  <span data-feather="dollar-sign"></span>
                  Billing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
            </ul>

            <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>-->
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
        </main>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!--Extra JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script type="text/javascript" src="/js/dashboard.js"></script>
  </body>
</html>

<!doctype html>
  <html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"  href="{{ asset('css/theme.css') }}">
 
 <title>Tickets CC</title>
 
  </head>
  <body class="bg-light">
    <div id="db-wrapper">

      <!-- navbar vertical -->
      <nav class="navbar-vertical navbar">
        <div class="nav-scroller">
            <!-- Brand logo -->
            <a class="navbar-brand" href="#">
                <img src="#" alt="Logotipo CC" />
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link has-arrow @@if (context.page ===  'dashboard') { active }" href="#">
                        <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Tickets CC
                    </a>
    
                </li>
    
    
             <!-- Nav item -->
             <li class="nav-item">
                <div class="navbar-heading">Acciones</div>
            </li>
                 <!-- Nav item -->
                    <div id="navPages" class="" data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Elemento de prueba
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav item -->
                    <div id="navPages" class="" data-bs-parent="#sideNavbar">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link" href="#">
                                  Elemento de prueba
                              </a>
                          </li>
                      </ul>
                  </div>
    </nav>

       <!-- Page content -->
      <div id="page-content">
        <div class="header @@classList">
          <!-- header -->
          <nav class="navbar-classic navbar navbar-expand-lg">
            <a id="nav-toggle" href="#"><i
                data-feather="menu"
        
                class="nav-icon me-2 icon-xs"></i></a>
            <div class="ms-lg-3 d-none d-md-none d-lg-block">
              <!-- Form -->
              <form class="d-flex align-items-center">
                <input type="search" class="form-control" placeholder="Search" />
              </form>
            </div>
            <!--Navbar nav -->
            <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
              <li class="dropdown stopevent">
                <a class="btn btn-light btn-icon rounded-circle indicator
                  indicator-primary text-muted" href="#" role="button"
                  id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="icon-xs" data-feather="bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                  aria-labelledby="dropdownNotification">
                  <div>
                    <div class="border-bottom px-3 pt-2 pb-3 d-flex
                      justify-content-between align-items-center">
                      <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                      <a href="#" class="text-muted">
                        <span>
                          <i class="me-1 icon-xxs" data-feather="settings"></i>
                        </span>
                      </a>
                    </div>
                    <!-- List group -->
                    <ul class="list-group list-group-flush notification-list-scroll">
                      <!-- List group item -->
                      <li class="list-group-item bg-light">
        
        
                        <a href="#" class="text-muted">
                            <h5 class=" mb-1">Rishi Chopra</h5>
                            <p class="mb-0">
                              Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                            </p>
                        </a>
        
        
        
                  </li>
                     
                    </ul>
                    <div class="border-top px-3 py-2 text-center">
                      <a href="#" class="text-inherit fw-semi-bold">
                        View all Notifications
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- List -->
              <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="#"
                      class="rounded-circle" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="dropdownUser">
                  <div class="px-4 pb-0 pt-2">
        
        
                    <div class="lh-1 ">
                      <h5 class="mb-1"> John E. Grainger</h5>
                      <a href="#" class="text-inherit fs-6">View my profile</a>
                    </div>
                    <div class=" dropdown-divider mt-3 mb-2"></div>
                  </div>
        
                  <ul class="list-unstyled">
        
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                        Profile
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
        </div>

        {{-- Se inserta contenido aqui --}}
        @yield('index')
        
        
  <script src="{{asset('assets/libs/jquery/dist/jquery.js')}}"></script>
  <script src=" {{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.js')}} "></script>
  <script src=" {{asset('assets/js/theme.js')}}"></script>

  </body>
 </html>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>smile</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/.png"
      sizes="16x16"
      href="{{asset('admin-assets/assets/images/favicon.png')}}"
    />
    <!-- Custom CSS -->
    <link href="{{asset('admin-assets/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('admin-assets/dist/css/style.min.css')}}" rel="stylesheet" />
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css')}} -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="{{asset('admin-assets/assets/images/logo-icon.png')}}"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                Al-Asmat Foundation
                <!-- <img
                  src="{{asset('admin-assets/assets/images/logo-text.png')}}"
                  alt="homepage"
                  class="light-logo"
                /> -->
              </span>
             
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
             <!--  <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Create New <i class="fa fa-angle-down"></i
                  ></span>
                  <span class="d-block d-md-none"
                    ><i class="fa fa-plus"></i
                  ></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li> -->
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
             <!--  <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li> -->
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif 

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

              <!--  -->
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <!-- <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{asset('admin-assets/assets/images/users/a.jpg')}}"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                    Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-success btn-rounded text-white"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li> -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{url('/')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Donation </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{url('approved')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Approved  </span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="{{url('unapprove')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Unapproved </span></a
                    >
                  </li> 
                  <li class="sidebar-item">
                    <a href="{{url('create')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li> 
                
                  
             
              
              
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Gallery </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{route('gelleries.index')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">List  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('gelleries.create')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li>
                
                  
             
              
              
            </ul>
          </li>
           <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Plan </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{route('plans.index')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">List  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('plans.create')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li>
                
                  
             
              
              
            </ul>
          </li>
           <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Events </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{route('events.index')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">List  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('events.create')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li>
                
                  
             
              
              
            </ul>
          </li>
           <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Slider </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{route('sliders.index')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">List  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('sliders.create')}}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li>


                  
                
                  
             
              
              
            </ul>
          </li>

          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Company_Info </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{ route('company.index') }}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">List  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{ route('company.create') }}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li>
            </ul>
          </li>


          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">About </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{ url('about/show') }}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">List  </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{ route('about.create') }}" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu">Add </span></a
                    >
                  </li>

                  
              
            </ul>
          </li>

          
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- Content Start  -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
         @yield('content')
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
          
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div><!-- end content  -->
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Developers. Designed and Developed by
          <a href="https://www.wrappixel.com">Developers</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin-assets/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin-assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin-assets/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin-assets/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin-assets/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin-assets/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{asset('admin-assets/dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('admin-assets/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin-assets/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin-assets/dist/js/pages/chart/chart-page-init.js')}}"></script>
    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </body>
</html>

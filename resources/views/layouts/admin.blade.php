<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
   
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link href="https://unpkg.com/bootstrap-table@1.15.2/dist/bootstrap-table.min.css" rel="stylesheet">
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet" type="text/css">
 <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body id="app">
    <div>
        @if(auth::check())
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img  class="logo" src="{{asset('images/logo.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right account animated flipInY" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                    </ul>
                
            </div>
        </nav>
        <div id="dash-content">
        <div id="sidenav">
                <div class="user-account">
                      
                                <img class="profile-pic round-pic" src="{{asset('images/img.jpg')}}">
                           
                            <div class="profile-name">
                                <span>Welcome,</span><br>
                                <a href="#" class="dropdown-bt user-name" data-toggle="dropdown"><strong>{{Auth::user()->fname.' '.Auth::user()->lname}}</strong></a>
                                <ul class="account animated flipInY">
                                    <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                    <li><a href="{{ route('logout') }}" aria-haspopup="true" aria-expanded="false" v-pre onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="icon-power"></i>Logout</a>
                            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        <hr>
                        
                        <!--<div class="row">
                            <div class="col-4">
                                <h6>5+</h6>
                                <small>Experience</small>                        
                            </div>
                            <div class="col-4">
                                <h6>400+</h6>
                                <small>Users</small>                        
                            </div>
                            <div class="col-4">                        
                                <h6>80+</h6>
                                <small>Tickets</small>
                            </div>
                        </div>-->
                    </div>

                    @if (Auth::user()->role_id==1)
                    <div class="panel-title row" >
                        <div class="title-panel col-lg-3 col-md-3 col-sm 5">Administrator</div>
                        <div class="panel-border col-lg-9 col-md-9 col-sm 7" ></div>
                    </div>

                    <ul class="main-menu metismenu">
                            <li class="active"><a href="{{ url('home') }}"><i class="fa fa-tachometer-alt icon-menu"></i><span>Dashboard</span></a></li>
                            <li class="submenu">
                                <a href="#"class="dropdown-btn"><i class="fa fa-mail-bulk icon-menu"></i>Accesor 
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                  <ul  class="drop-down">
                                    <li><a href="{{ url('accesor') }}">View all Accesors</a></li>
                                    <li><a href="{{ url('accesor/create') }}">Add new Accesor </a></li>
                                    
                                </ul>
                             
                            </li>
                            <li class="submenu">
                                <a href="#"class="dropdown-btn"><i class="fa fa-bus icon-menu"></i>Doctors
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                  <ul  class="drop-down">
                                    <li><a href="{{ url('doctor') }}">View all doctors</a></li>
                                </ul>
                             
                            </li>
                    </ul>
                    
                    @elseif (Auth::user()->role_id==2)
                    <div class="panel-title row" >
                        <div class="title-panel col-lg-3 col-md-3 col-sm 5">Accessor</div>
                        <div class="panel-border col-lg-9 col-md-9 col-sm 7" ></div>
                    </div>

                   
                    <ul class="main-menu metismenu">
                        <li class="active"><a href="{{ url('home') }}"><i class="fa fa-tachometer-alt icon-menu"></i><span>Dashboard</span></a></li>
                        <li class="submenu">
                            <a href="#"class="dropdown-btn"><i class="fa fa-mail-bulk icon-menu"></i>Doctor 
                                <i class="fa fa-caret-down"></i>
                            </a>
                              <ul  class="drop-down">
                                <li><a href="{{ url('doctor') }}">View all Doctor's</a></li>
                                <li><a href="{{ url('doctor/create') }}">Add new Doctor's </a></li>
                                
                            </ul>
                         
                        </li>

                        <li class="submenu">
                            <a href="#"class="dropdown-btn"><i class="fa fa-mail-bulk icon-menu"></i>Applicantion
                                <i class="fa fa-caret-down"></i>
                            </a>
                              <ul  class="drop-down">
                                <li><a href="{{ url('application') }}">View all Application's</a></li>    
                            </ul>
                         
                        </li>
                  
                </ul>
                @elseif (Auth::user()->role_id==3)
                    <div class="panel-title row" >
                        <div class="title-panel col-lg-3 col-md-3 col-sm 5">Doctor</div>
                        <div class="panel-border col-lg-9 col-md-9 col-sm 7" ></div>
                    </div>

                   
                    <ul class="main-menu metismenu">
                        <li class="active"><a href="{{ url('home') }}"><i class="fa fa-tachometer-alt icon-menu"></i><span>Dashboard</span></a></li>
                        <li class="submenu">
                            <a href="#"class="dropdown-btn"><i class="fa fa-mail-bulk icon-menu"></i>Applicants 
                                <i class="fa fa-caret-down"></i>
                            </a>
                              <ul  class="drop-down">
                                <li><a href="{{ url('applicants') }}">View Applicants</a></li>
                                
                            </ul>
                         
                        </li>
                  
                </ul>
                @elseif (Auth::user()->role_id==4)
                    <div class="panel-title row" >
                        <div class="title-panel col-lg-3 col-md-3 col-sm 5">Applicant</div>
                        <div class="panel-border col-lg-9 col-md-9 col-sm 7" ></div>
                    </div>

                   
                    <ul class="main-menu metismenu">
                        <li class="active"><a href="{{ url('home') }}"><i class="fa fa-tachometer-alt icon-menu"></i><span>Dashboard</span></a></li>
                        <li class="submenu">
                            <a href="#"class="dropdown-btn"><i class="fa fa-mail-bulk icon-menu"></i>Flight Information
                                <i class="fa fa-caret-down"></i>
                            </a>
                              <ul  class="drop-down">
                                <li><a href="{{ url('flightinfo') }}">View information</a></li>
                                <li><a href="{{ url('flightinfo/create') }}">Add Flight Information </a></li>
                                
                            </ul>
                         
                        </li>

                        <li class="submenu">
                            <a href="#"class="dropdown-btn"><i class="fa fa-mail-bulk icon-menu"></i>Medical Application
                                <i class="fa fa-caret-down"></i>
                            </a>
                              <ul  class="drop-down">
                                <li><a href="{{ url('medical') }}">View </a></li>
                                <li><a href="{{ url('medical/create') }}">Apply </a></li>
                                
                            </ul>
                         
                        </li>
                  
                </ul>
                    @endif
                </div>
        
        @endif
        <div id="main-dashbord">
            @yield('content')
        </div>
        
        </div>   
    </div>
                  
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            .card{
                border:none;
            }
            .card-button{
                text-align: center;
                height: 200px;
                margin-top: 10px;
                padding-top: 70px;
                -webkit-box-shadow: 0px 0px 9px 3px rgba(235,235,235,0.8);
                -moz-box-shadow: 0px 0px 9px 3px rgba(235,235,235,0.8);
                box-shadow: 0px 0px 9px 3px rgba(235,235,235,0.8);
                border-radius:5px;
            }

            .top-margn{
                margin-top: 100px;
            }
      a{
          color: black;
      }
      a:hover{
          color: black;
          text-decoration:none;
      }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif-->

            <div class="container top-margn">
                <div class="row ">
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="{{ route('login') }}"><div class="card card-button"><i class="fas fa-sign-in-alt"></i><span>Login</span></div></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="{{ route('register') }}"> <div class="card card-button"><i class="fas fa-registered"></i>Register</div></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href=""><div class="card card-button"><i class="fas fa-address-card"></i>About</div></a>
                    </div>
                </div>
            </div>
        </div>

        
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>

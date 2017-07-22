<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TO-DO') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">
  <style>

/*label {
    display: none;
}*/

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
   
    column-width: auto;
    table-layout: fixed;
}

td, th {

    border: 2px solid #00B0B0;
    border-color: rgb(0, 0, 0);
   
    text-align: center;
    padding: 8px;
    word-wrap:break-word;
    
}

tr:nth-child(odd) {
    background-color: #dddddd;
}
tr:nth-child(even) {
    background-color: #ffffff;
}
body {
    background-image:  url("/img/background-image1.jpg");
}

.row.item {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }

strong {
    color: #fff;
}

.portfolio-caption {
    color: #fff;
}

</style>

    <!-- Scripts -->
    <script>
        window.TO-DO = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       FOODIES COMMUNITY
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <h1 align="center"> <b><strong > Restaurent List </strong></b> </h1> 

        @yield('content')
      
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('jquery-1.12.0.min.js') }}"/></script>
<script src="{{ asset('jquery.dataTables.js') }}"/></script>
<script src="{{ asset('js/DT_bootstrap.js') }}"/></script>

<script type="text/javascript"> 
    $(document).ready(function(){
        $('#example').dataTable({
            "bPaginate":false
        });
    }); 
</script>
</body>
</html>

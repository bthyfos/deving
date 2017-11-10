<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PLAN INTER ORG') }}</title>
<style>

div.token-input-dropdown{           
   z-index: 11001 !important;
}
a.ex1:hover, a.ex1:active
{
    color: #0D8BBE;
}
.footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   background:#999;
}
a.active {
    background-color:#999;
}
</style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/token-input.css')}}" />
    <link rel="stylesheet"  href="{{asset('/css/token-input-mac.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/token-input-facebook.css')}}"/>
    

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
                    <a class="navbar-brand" href="#">
                        {{'PLAN INTER ORG'}}
                    </a>
        <ul class="nav navbar-nav navbar-left" id="example-one">
            <li ><a href="{{ route('home') }}">Home</a></li>
            <li ><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('recipients') }}">Recipients</a></li>
            <li><a href="{{ route('handovers') }}">Handovers</a></li>
          </ul>
        
      </div>
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
                            <li><a href="{{ route('login') }}"></a></li>
                            <li><a href="{{ route('register') }}"></a></li>
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
        <div class="row">
        <div class="col-md-2"></div>
       <div class="col-xs-12 col-sm-6 col-md-8">
           @yield('content')
       </div>
        <div class="col-md-2"></div>
        </div>
@include('footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('/js/jquery-1.11.3.min.js')}}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/jquery.tokeninput.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () 
{
    $("#searchForm #name").tokenInput("getRecipient");
});
</script>

<script type="text/javascript">
$(document).ready(function () 
{
    $("#searchForm #product").tokenInput("search");
});
</script>
</body>
</html>

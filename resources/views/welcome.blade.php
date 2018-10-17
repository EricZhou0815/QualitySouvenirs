<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/asite.css') }}" rel="stylesheet">


    </head>
    <body>
            <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-fixed-top">
            <div class="container-fluid">
                <div class="container">
                    <div class="myLogo navbar-brand">
                        <a asp-area="" asp-controller="Home" asp-action="Index">
                            <div class="logoContainer">
                                <img class="myLogoImage" src="~/images/Logo.jpg" alt="Pono" />
                                <div class="logoText">Quality Souvenirs</div>
                            </div>
                        </a>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav ml-auto nav">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/shop') }}">SHOP</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">ABOUT</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">CONTACT</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/souvenir') }}">Souvenir</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/supplier') }}">Supplier</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/category') }}">Category</a></li>
                        </ul>
                                      
                    </div>
                </div>
            </div>
        </nav>







        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

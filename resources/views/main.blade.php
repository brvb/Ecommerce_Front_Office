<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce Template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.min.css') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!--icons-->
        <script src="https://kit.fontawesome.com/993199b4e7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('./assets/css/font-awesome.min.css') }}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('./assets/css/global.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/section.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/nouislider.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/slick-theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/newsletter.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/footer.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/page-inicial/cart.css') }}" />


    </head>
    <body>
        <div class="header">
            @include('layouts.navbar')
        </div>
        <div class="container">
            @yield('pagina-main')
        </div>
        <div class="container">
            @yield('pagina-cart')
        </div>
        <div class="container">
            @yield('pagina-product')
        </div>
        <div class="container">
            @yield('pagina-checkout')
        </div>
        <div class="container">
            @yield('pagina-filtro-products')
        </div>
        <div class="container">
            @yield('pagina-contacto')
        </div>

		<!-- FOOTER -->
		@include('layouts.footer')

        <script src="{{ asset('assets/scripts/cart.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/scripts/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/slick.min.js') }}"></script>
		<script src="{{ asset('assets/scripts/nouislider.min.js') }}"></script>
		<script src="{{ asset('assets/scripts/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('assets/scripts/main.js') }}"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Product</title>

    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" ></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
	
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Products
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{route('products.create')}}">Create</a>
										<a class="dropdown-item" href="{{route('products.index')}}">All</a>
						
								</div>
							</li>						
						</ul>
				                		
							
             
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css')}}">
  
	<script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js')}}"></script>
	<script>
		$(document).ready( function () {

				$('#example').DataTable();
							
				

		} );
	</script>

</body>
</html>

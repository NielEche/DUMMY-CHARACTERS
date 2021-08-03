<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700i,700|Poppins:700">
    <link rel="stylesheet" href="{{ asset('files/css/font-awesome.css') }}" type="text/css" media="all">

    <!-- Styles -->
    <!--<link rel="stylesheet" href="{{ mix('css/app.css') }}">-->
    <link rel="stylesheet" href="{{ asset('files/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        /* This only works with JavaScript, 
               if it's not present, don't show loader */
        .no-js #loader {
            display: none;
        }

        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }

    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('files/favicons/favicon.ico') }}" type="image/x-icon">


    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


    <script src="https://github.com/Modernizr/Modernizr/raw/master/modernizr.js"></script>
    <script>
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $("#loader").animate({
                top: -200
            }, 1500);
        });

    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

     <!--<script src="http://unpkg.com/turbolinks"  data-turbolinks-track="reload"></script>
    <meta name="turbolinks-visit-control" content="reload">-->
    
</head>

<body style=" background-image: url('files/images/sky.jpg') !important; background-repeat:no-repeat; background-size:cover;" onload="startTime()">
    <div class="se-pre-con">
        <h1> < loading /> </h1>
    </div>  
    <section>
             <!-- Page Content -->
        @yield('content')
    </section>
   
    @include('pages.partials.footer')
    @livewireScripts
    <script src="{{ asset('files/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('files/owlcarousel/owl.carousel.js') }}"></script>
    <script type="application/javascript" src="{{ asset('files/js/lib.js') }}"></script>
    <script type="application/javascript" src="{{ asset('files/js/load.js') }}"></script>
    <script defer async type="application/javascript" src="{{ asset('files/js/app.js') }}"></script>
    <script type="application/javascript" src="{{ asset('files/js/lib.min.js') }}"></script>
    <script>
        function startTime() {
            var today = new Date() ;
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);

            document.getElementById('txt').innerHTML = 
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {i = "0" + i}; 
            return i ;
        }
    </script>
    <script>
        // Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    </script>

    <script>
        $().alert();

        setTimeout(function(){$('.alert').
        alert('close')}, 3000);
    </script>
</body>

</html>

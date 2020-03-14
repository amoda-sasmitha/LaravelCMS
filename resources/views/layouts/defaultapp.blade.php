<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.autocomplete.js') }}"></script>
    <title>@yield('title')</title>


</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/fv-icon.png" type="image/gif">
    <title>Accommodations</title>
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!--fontawesome 5-->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!--slicknav.css-->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
    <!--lity.css-->
    <link rel="stylesheet" href="{{ asset('css/lity.min.css') }}">
    <!--slickslider.css-->
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Custom.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_a.css') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">
    @yield('content')

      <!-- Bootstrap core JavaScript-->
     
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.min.js"></script> --}}

      <!-- Custom scripts for all pages-->
      
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init({
            once: true
        });
        </script>
<!-- End-footer-section -->
    <!-- Back to top button -->
    <a id="btn-to-top" class="show"></a>
    <!-- Jquery.min.js-->
    <script src="{{ URL::asset('js/frontend/jquery.1.12.4.js') }}"></script>
    <!--bootstrap.min.js-->
    <script src="{{ URL::asset('js/frontend/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/frontend/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/frontend/bootstrap-datepicker.js') }}"></script>
    <!--slicknav.min.js-->
    <script src="{{ URL::asset('js/frontend/jquery.slicknav.min.js') }}"></script>
    <!--slickslider.min.js-->
    <script src="{{ URL::asset('js/frontend/slick.min.js') }}"></script>
    <!-- counterup.min.js -->
    <script src="{{ URL::asset('js/frontend/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/frontend/jquery.counterup.min.js') }}"></script>
    <!-- magnific-popup.js -->
    <script src="{{ URL::asset('js/frontend/lity.min.js') }}"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="{{ URL::asset('js/frontend/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('js/frontend/imagesloaded.js') }}"></script>
    <!-- main.js -->
    <script src="{{ URL::asset('js/frontend/main.js') }}"></script>
      
</body>

</html>
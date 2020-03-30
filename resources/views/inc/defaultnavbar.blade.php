<!-- Preloader -->
<!-- <div id="preloader"></div> -->
<!-- Start-Header-Section -->
<header>
     <!-- Topbar-start-area -->
<div class="header_top_area type-two">
<div class="container">
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="contact_wrapper_top">
                <ul class="header_top_contact">
                           
                    <a href="tel:+94777999223" > <li>  <i class="fab fa-whatsapp" aria-hidden="true"></i>   <i class="fa fa-phone" aria-hidden="true"></i> +94 77 79 99 223 </li> </a>
                    <a href="mailto:info@leopardholidays.com">
                     <li><i class="fa fa-envelope" aria-hidden="true"></i>info@leopardholidays.com</li></a>
                 </ul>
                <div class="topbar-icon">
                    <ul>
                    <li><a href="https://www.instagram.com/leopardholidayssrilanka" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/leopardholidays/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.tripadvisor.com/Attraction_Review-g293962-d14149925-Reviews-Leopard_Holidays-Colombo_Western_Province.html" target="_blank"><i class="fab fa-tripadvisor"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End-Topbar-area -->

<!-- Menu-start-area -->
<div class="header-fixed header-two bg-white " >
<div class="container-fluid " style="max-width: 1820px; " >
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('images/main/logo.jpg')}}" alt="logo">
    </a>
    <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link " href="{{url('/')}}">Home </a>
            </li>
            <li class="nav-item {{ Request::is('itineraries*') ? 'active' : '' }}">
                <a class="nav-link " href="{{url('itineraries/')}}">Itineraries </a>
            </li>
            <li class="nav-item {{ Request::is('daytours*') ? 'active' : '' }}">
                <a class="nav-link " href="{{url('daytours/')}}">Day Tours </a>
            </li>
            <li class="nav-item {{ Request::is('accommodations*') ? 'active' : '' }}">
            <a class="nav-link " href="{{url('accommodations/')}}">Accommodation </a>
            </li>
            <li class="nav-item {{ Request::is('discover-sri-lanka*') ? 'active' : '' }}">
                <a class="nav-link " href="{{url('discover-sri-lanka/')}}">Discover Sri Lanka </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link " href="#">Special Offers </a>
            </li> --}}
            <li class="nav-item {{ Request::is('our-story') ? 'active' : '' }}">
                <a class="nav-link " href="{{url('our-story/')}}">Our Story </a>
            </li>
            <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                <a class="nav-link " href="{{url('contact-us/')}}">Contact Us  </a>
            </li>
        </ul>
    </div>
</nav>
<div class="mobile-menu" data-logo="{{asset('images/main/logo.jpg')}}"></div>
</div>
</div>
<!-- End-Menu-area-->
</header>
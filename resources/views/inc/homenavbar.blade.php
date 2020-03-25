<style>

    .homepage_main_search_title{
        margin-top: calc(20% - 50px) !important;
    }
    
    
    @media screen and (max-width: 700px) {
        .homepage_main_search_title{
        margin-top: calc(15% - 50px) !important;
        }
        .mobilevirew_hide{
            display: none !important;
        }
     
    }
    #more {display: none;}
    
    .btn-tour{
    
        background-color: #fb9827;
    }
    .slideImages{
        height: 300px;
        background-repeat: no-repeat;
        background-size: cover ;
        background-position: center center;
    }
    .pop-btn{
        top: 40% !important;
    }
    .home_custop_hide_p{
        color: white;
         top: 50% !important;
        font-size: 1rem;
        visibility: hidden;
        position: absolute;
        left: 5%;
        margin: 0px;
        padding: 0px;
        line-height: 10px;
        letter-spacing: unset;
        transition-delay: 10ms;
        transition: all ease-in-out 0.5s;
        opacity: 0;
        padding: 0px 1rem 10px 1rem;
    
    }
    .ch_handpicked_text h3 {
      font-size: 2.5rem;
      line-height: 50px;
    }
    .ch_handpicked_text h2 {
      font-size: 3rem;
      line-height: 50px;
    }
    .ch_handpicked_text h4 {
      font-size: 1rem;
      /* line-height: 50px; */
      /* font-weight: 400 !important; */
      /* color: #777777 !important; */
        font-family: 'Roboto', sans-serif !important;
    }
    ._day_title{
        font-size: 1rem;
       line-height: 50px; 
      font-weight: 400 !important;
      color: #777777 !important;
        font-family: 'Roboto', sans-serif !important;
    }
    .ch_handpicked_text p {
      max-width: 800px;
      font-size: 1rem;
      line-height: 30px;
    }
    
    .place-box:hover .wapper-img .home_custop_hide_p {
        transition: all ease-in-out 0.8s;
       
        opacity: 0.8;
        visibility: visible;
    }
    .day_tours_cards{
        height: 250px;
        background-repeat: no-repeat;
        background-size: cover ;
        background-position: center center;
        /* border-top-left-radius: 5px;
        border-top-right-radius: 5px; */
    }
    .day_tours_overlay{
        
        background-color:black;
        opacity: 0.7;
        height: 40px;
        padding: 0px !important;
        bottom: 0px;
        width: 100%;
        position: absolute;
        left: 0;
    }
    .day_tours_overlay h3{
        color:white;
        margin-left: 5px;
        font-size: 1rem;
        padding-left: 5px;
        padding-top: 5px;
    }
    .day_tours_overlay a{
        margin-left: 5px !important;
        color:white;
        text-decoration: none;
        padding: 3px !important;
        font-size: 1rem;
    }
    .day_tours_overlay a:hover{
        color:white;
        background-color: #fb9827;
    }
    .day_tours_more_btn{
        border: 2px solid #ffffff !important;
        border-radius: 50px !important;
    }

    .custom_btn:hover{
    background-color: #fb9827 !important;
    background: #fb9827 !important;
    border: #fb9827;
    
    }
    .customer_revie{
        height: 500px !important;
    }
    .hm_contatcus_div{
        position: relative;
        border: 1px solid #e4e4e4;
        background: #fff;
        padding: 25px 25px 25px 110px;
        margin-bottom: 15px;
        min-height: 125px;
        z-index: 1;
    
    }
    .hm_contatcus_div .call-us:after {
        content: url('images/contactus/call_us.png');
    }
    .hm_contatcus_divr:after {
        position: absolute;
        left: 35px;
        top: 40px;
    }
    
    .hm_contatcus_div h5{
        font-size: 1rem !important;
    }
    .hm_contatcus_div p{
        font-size: 0.8rem !important;
        margin: 0px !important;
    }
    </style>
     <!-- Preloader -->
     {{-- <div id="preloader"></div> --}}
     <!-- Start-Header-Section -->
     <header class="header-type-three">
           <!-- Topbar-start-area -->
<div class="header_top_area type-two" style="background: #FB9827;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="contact_wrapper_top">
                    <ul class="header_top_contact">
                               
                        <a href="tel:+94777999223" > <li><i class="fa fa-phone" aria-hidden="true"></i> +94 77 79 99 223 </li> </a>
                        <a href="mailto:info@leopardholidays.com">
                         <li><i class="fa fa-envelope" aria-hidden="true"></i>info@leopardholidays.com</li></a>
                     </ul>
                    <div class="topbar-icon">
                        <ul>
                            <!-- <li><a href="#"><i class="fab fa-behance"></i></a></li> -->
                            <li><a href="https://www.instagram.com/leopardholidayssrilanka"><i class="fab fa-instagram"></i></a></li>
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
         <div class="header-fixed header-one">
             <div class="container-fluid" style="max-width: 1820px;"> 
                 <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('images/main/logo.jpg')}}" alt="logo">
                     </a>
                     <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
                         <ul class="navbar-nav">
                             <li class="nav-item active">
                                 <a class="nav-link" href="{{url('/')}}" >Home </a>                               
                             </li>
                             <li class="nav-item ">
                                 <a class="nav-link text-dark" href="{{url('itineraries/')}}" >Itineraries </a>
                             </li>
                             <!-- copy -->
                             <li class="nav-item ">
                                 <a class="nav-link text-dark" href="{{url('daytours/')}}" >Day Tours </a>
                             </li>
                             <li class="nav-item ">
                                 <a class="nav-link text-dark" href="{{url('accommodations/')}}" >Accommodation </a>
                             </li>
                             <li class="nav-item ">
                                 <a class="nav-link text-dark" href="{{url('discover-sri-lanka/')}}" >Discover Sri Lanka </a>
                                 {{-- <ul class="dropdown">
                                     <li class="nav-item">
                                         <a class="nav-link text-dark" href="discover-srilanka.html">Discover Sri Lanka 1</a>
                                     </li>
                                 </ul> --}}
                             </li>
                             {{-- <li class="nav-item ">
                                 <a class="nav-link text-dark" href="#">Special Offers </a>
                                 
                             </li> --}}
                             <li class="nav-item ">
                                 <a class="nav-link text-dark" href="{{url('our-story/')}}">Our Story  </a>
                                 
                             </li>
                             <li class="nav-item ">
                                 <a class="nav-link text-dark" href="{{url('contact-us/')}}">Contact Us </a>
                                 
                             </li>
                           
                             <!-- copy -->
                         </ul>
                         <div class="log-btn">
                             <div id="search-btn">
                                 <form>
                                     <input id="search" name="search" type="text" placeholder="Search here...">
                                     <a href="#" class="fa fa-search"></a>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </nav>
                 <div class="mobile-menu" data-logo="{{asset('images/main/logo.jpg')}}"></div>
             </div>
         </div>
         <!-- End-Menu-area-->
     </header>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ocanics || eCommerce</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front_assests/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front_assests/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('front_assests/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('front_assests/images/logo1.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('front_assests/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('front_assests/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <!-- fonts -->
      <link href="{{asset('front_assests/https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap')}}" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('front_assests/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="{{asset('front_assests/https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('front_assests/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('front_assests/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('front_assests/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <marquee behavior="" direction="" ><h2 style="color:whitesmoke">Octanic App's E-Commers Website</h2></marquee>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="{{asset('front_assests/images/logo1.png')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
        
         <!-- header section end -->
         @section('content')
             
         @show
         <!-- banner section start -->
        
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="{{asset('front_assests/images/logo1.png')}}"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email (ReadOnly)" name="Your Email"  readonly>
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
                
            </div>
            <div class="location_main">Contact : <a href="#">+91 7264817983</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('front_assests/js/jquery.min.js')}}"></script>
      <script src="{{asset('front_assests/js/popper.min.js')}}"></script>
      <script src="{{asset('front_assests/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front_assests/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('front_assests/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('front_assests/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('front_assests/js/custom.js')}}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
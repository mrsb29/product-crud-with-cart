@extends('front-end.front_layout')
@section('content')
<div class="header_section">
   <div class="container">
      
      <div class="containt_main">
         <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.html">Currently Not Required  </a>
            
         </div>
         <span class="toggle_icon" onclick="openNav()"><img src="{{asset('front_assests/images/toggle-icon.png')}}"></span>
         <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="#"> Not-Required</a>
              
            </div>
         </div>
         <div class="main">
            <!-- Another variation with a button -->
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search this blog">
               <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                  <i class="fa fa-search"></i>
                  </button>
               </div>
            </div>
         </div>
         <div class="header_box">
            <div class="lang_box ">
               <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
               <img src="{{asset('front_assests/images/flag-india.png')}}" width="10px" height="10px" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
               </a>
               <div class="dropdown-menu ">
                  <a href="#" class="dropdown-item">
                  
                  Currently Not required 
                  </a>
               </div>
            </div>
            <div class="login_menu">
               <ul>
                  <li><a href="/card_data" class="btn-sm btn-success">
                     <i class="fa-shopping-cart" aria-hidden="true"></i>
                     <span class="padding_10">Cart ({{$cart_count}})</span></a>
                  </li>
                  <li><a href="/logout" class="btn-sm btn-warning">
                     <i class="fa fa-user" aria-hidden="true"></i>
                     <span class="padding_10">logout</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
 <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#" @readonly(true)>Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#" @readonly(true)>Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#" @readonly(true)>Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Fashion Products</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           @foreach ($data as $item)
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">{{$item->product_name}}</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">{{$item->product_price}}</span></p>
                                 <div class="tshirt_img"><img src="{{ asset('public/Image/'. $item->product_img) }}"  >
                                 </div>
                                 <div class="btn_main">
                                    <form action="/add_to_cart" method="POST">
                                       @csrf
                                       <input type="hidden" name="product_id" value="{{$item->img_id}}">
                                       <button type="submit" class="btn sm btn-warning">Add To Cart</button>
                                    </form>
                                    <div class="seemore_bt"><a href="#"></a></div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           
                        </div>
                     </div>
                  </div>
               </div>
 
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
     
@endsection
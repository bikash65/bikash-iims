@extends('cms.front_layout.master')
@section('content')

    <body>

<header>
                 @include('cms.front_includes.menu-bar')
                
        



        <div class="home-banner-section clearfix">
            <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container0">
            
            <div class="ws_images"><ul>
             <li><img src=" {{URL::asset('frontend/images/home-banner/1.jpg')}}" alt="bootstrap carousel" title="" id="wows0_0"/></li>

                <!--<li><img src="images/home-banner/1.jpg" alt="bootstrap carousel" title="<b>ɪkɪˈbɑːnə </b> The Art of Flower Arrangement" id="wows0_0"/></li>-->

            </ul></div>
            <div class="ws_shadow">
               

            </div>
            </div>  
            <script type="text/javascript" src="{{URL::asset('frontend/engine0/wowslider.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('frontend/engine0/script.js')}}"></script>
            <!-- End WOWSlider.com BODY section -->
       
       
        </div><!-- end of home-banner-section -->
        
        
      
 
        
        
        
        <div class="head_det ">
            
            <div class="container ">
                <div class="row head_det2">
                        <div class="status_msg">
                            @include('flash::message')
                            @include('errors.error')
                        </div>
                
                         <div class="banner_details " align="center">
                            <div class="head_lin">
                            <div class="ban_headline">
                                <h1>Nepal’s first online cold store</h1>
                                <h3>Mahalaxmi cold Store is Nepal’s first online order cold store</h3>
                            </div>
                            </div>

                         </div>  <!--banner_details-->
                        
                         <div class="row prod_div ">
                                 <div class="col-sm-2 col-sm-offset-1 product">
                                     <div class="all_prod product1">

                                         <a><img src="{{URL::asset('frontend/icons/meat1.png')}}" class="img-responsive">
                                             <span>Chicken</span></a>
                                     </div>
                                 </div>

                                 <div class="col-sm-2 product">
                                     <div class="all_prod product2">
                                         <a><img src="{{URL::asset('frontend/icons/meat2.png')}}" class="img-responsive">
                                             <span>Mutten</span></a>
                                     </div>
                                 </div>

                                 <div class="col-sm-2 product">
                                     <div class="all_prod product3">
                                         <a><img src="{{URL::asset('frontend/icons/meat3.png')}}" class="img-responsive">
                                             <span>Ostrich</span></a>
                                     </div>
                                 </div>

                                 <div class="col-sm-2 product">
                                     <div class=" all_prod product4">
                                         <a ><img src="{{URL::asset('frontend/icons/meat4.png')}}" class="img-responsive">
                                             <span>Sausage</span></a>
                                     </div>
                                 </div>

                                 <div class="col-sm-2 product produt">
                                     <div class="all_prod product5">
                                         <a><img src="{{URL::asset('frontend/icons/meat5.png')}}" class="img-responsive">
                                             <span> Fish </span></a>
                                     </div>

                             </div>

                                
                            </div>
                     
                     </div><!--row-->
                     </div> <!--container-->
                </div>

    </header>  
    
    <div class="body_part ">
   
          
   
        <div class="border_img"><img src="{{URL::asset('frontend/icons/border.jpg')}}" class="img-responsive"></div>

        
        <div class="order_bg gb_img "> 
            <div class="container ">
                <div class="row prd_bg">
                    
                    <div class="col-md-12 intro" align="center">
                        
                        <h1>HOW TO ORDER</h1>
                        <h3>Mahalaxmi cold Store is Nepal’s first online order cold store</h3>
 
                     </div> <!-- end of intro -->

                    <div class="col-sm-4 order_type" align="center">
                        <img src="{{URL::asset('frontend/icons/order.png')}}">
                        <h4>SELECT ORDER TYPE</h4>
                        <p>Mahalaxmi cold Store is Nepal’s first online order cold store Mahalaxmi cold Store is Nepal’s first online order cold store</p>
                     
                     </div> <!-- end of order_type -->
                     
                     <div class="col-sm-4 order_type" align="center">
                        <img src="{{URL::asset('frontend/icons/place_order.png')}}">
                        <h4>TAKE ORDER</h4>
                        <p>Mahalaxmi cold Store is Nepal’s first online order cold store Mahalaxmi cold Store is Nepal’s first online order cold store</p>
                     
                     </div> <!-- end of order_type -->
                     <div class="col-sm-4 order_type" align="center">
                        <img src="{{URL::asset('frontend/icons/deliver_ic.png')}}">
                        <h4>GET DELIVER</h4>
                        <p>Mahalaxmi cold Store is Nepal’s first online order cold store Mahalaxmi cold Store is Nepal’s first online order cold store</p>
                     
                     </div> <!-- end of order_type -->
                     

                    
                </div>  <!-- end of row -->
            </div>  <!-- end of container -->
          </div> <!-- end of gb_img -->
          
           <div class="gb_img "> 
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12 product_det" align="center">
                                        
                        <h1>OUR QUAILTY MEAT PRODUCTS</h1>
                        <h3>Mahalaxmi cold Store is Nepal’s first online order cold store</h3>
                     </div> <!-- end of intro -->
                  
                    
                     @foreach ($categories as $category)
                    <div class="col-sm-4 col-xs-6 product_type  " align="right">
                        <div class="prd1 ">
                            <img src="{{URL::asset('uploads/category/thumbnail')}}/{{$category->image}}">
                            <h4>{{$category->title}}</h4></br>
                            <span><a href="{{URL::to('/product-category')}}?id={{$category->id}}">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                     @endforeach
                  </div>  <!-- end of row -->
            </div>  <!-- end of container -->
          </div> <!-- end of gb_img -->
          
          
          <div class="testimonials_bg"> 
            <div class="container ">
                <div class="row ">
                    <div class="col-sm-2 "></div>
                    <div class="col-md-8 " align="center">
                    
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner tes_slid" role="listbox">
                                <div class="item active">
                                  <img src="{{URL::asset('frontend/icons/tes.png')}}" alt="Chania">
                                  <h2>Sachin Shakya</h2>
                                  <p>Darragh O’Shea is a rare breed indeed. I couldn’t believe it possible that on Racine’s doorstep I should find a butcher who understands that the complete process of selecting 3 1/2 year old cattle from rich grass pastures through to the attention and care needed to then age and dress the meat, supplies a rib of beef that truly delivers on all levels.</p>
                                </div>
                            
                                <div class="item">
                                     <img src="{{URL::asset('frontend/icons/tes.png')}}" alt="Chania">
                                        <h2>Sachin Shakya</h2>
                                        <p>Darragh O’Shea is a rare breed indeed. I couldn’t believe 
                                        it possible that on Racine’s doorstep I should find a butcher 
                                        who understands that the complete process of selecting 3 1/2 
                                        year old cattle from rich grass pastures through to the attention 
                                        and care needed to then age and dress the meat, supplies a rib of 
                                        beef that truly delivers on all levels.</p>
                                </div>

                              </div>
                            
               
                            </div>

 

                        </div>

                    <div class="col-sm-2 "></div>
                                             
                  </div>  <!-- end of row -->
            </div>  <!-- end of container -->
          </div> <!-- end of testimonials -->
          
          
          <div class="contact"> 
            <div class="container contact_bg">
                <div class="row ">
                    <div class="col-sm-3 " align="center">
                             
                                             
                     </div> <!-- end of order_type -->
                     
                      <div class="col-sm-6" align="center">
                             
                         <div class="cont_txt"> 
                             <h1>MEET THE BEST  </h1> 
                             <h2>MEAT IN TOWN  </h2>                          
                         </div>         
                                             
                     </div> <!-- end of order_type -->
                     
                      <div class="col-sm-3" align="right">
                             
                         <div class="contact_btn"> 
                             <a href="{{URL::to('/products')}}">ORDER NOW</a>
                       
                         </div>         
                                             
                     </div> <!-- end of order_type -->
                     
                     
                  </div>  <!-- end of row -->
            </div>  <!-- end of container -->
          </div> <!-- end of testimonials -->
@stop
@extends('cms.front_layout.master')
@section('content')
<body>

<header>

         @include('cms.front_includes.menu-bar')

    </header>
    
    


    
    <div class="inner_body">
    	<div class="container">
        	<div class="row">
             	<div class="col-md-12 breadcrumb_info" align="center">

        			<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('http://localhost:8000')}}">home</a></li>
                        <li class="breadcrumb-item active">features</li>
        			</ol>
                 </div><!-- breadcrumb_info -->
                 
                 
                  <div class="col-md-12 abt_intro" align="center">
                    	
                        <h1>FEATURES</h1>
                       
                        <img src="{{URL::asset('frontend/images/feature.jpg')}}" class="img-responsive">
                        <p>
                        Internet penetration rate is increasing day by day which make people very fast to know about news, different services. So, peoples spending most of the time on internet that why most of the work is doing through internet for e.g. if we need to buy some cloths or some phone gadgets, then most of the people buy through Kaymu.com.np because it is very easy and time saving.  The objectives of this project is to provide a high accessibility of service to the people who are busy not being able to manage the time, They can order the products they wanted through online and they can pay when their products will be delivered as an it’s an similar type of project that we are about to start kaymu.com.np is an online based shopping where people can get house hold stuffs, clothes, electronics item etc. Our project is also similar to kaymu.com.np the difference is we will only sell meats, or meat based products.

</p>
<p>
There are several features of this websites are following given bellows.</p>
<div class="feature_li" >
<ul>
  <li>This site is gives all the information about the product to provide better service for the customer.</li>
     <li>It provides the facility to the customers who want to order on-line due to lack of time</li>
           <li>Cash on home delivery no need to pay through internet.</li>
      <li>It’s providing the full details about the product and related information about the product like cost, size etc.</li>
      <li>To develop a system that will surely satisfied the customer service.</li>
</ul>
</div>

 
                     </div> <!-- end of intro -->
                 
                 
                 
             </div><!--  -->
         </div><!--  -->
      </div><!--  -->
   


        
        
          
          
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
                                	 <img src="../icons/tes.png" alt="Chania">
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
                             <a href="#">ORDER NOW</a>
                       
                         </div>      	
                                             
                     </div> <!-- end of order_type -->
                     
                     
                  </div>  <!-- end of row -->
            </div>  <!-- end of container -->
          </div> <!-- end of testimonials -->
          @stop
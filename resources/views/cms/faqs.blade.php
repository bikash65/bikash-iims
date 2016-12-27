@extends('cms.front_layout.master')
@section('content')
<body>

<header>

         <div class="nav-section nav_main clearfix">
            <div class="container ">
                <nav class="navbar-wrapper navbar-default nav_def" role="navigation" >
                    <div class="navbar-header tog_btn">

                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        
                        <div class="logo">
                                <a href="#"><img src="{{URL::asset('frontend/icons/logo.png')}}"></a>
                            </div>
                    </div>

                    <div class="navbar-collapse collapse nav_cos " >
                        <ul class="nav navbar-nav main-nav nav_ul">
                             <li><a href="{{URL::to('/about')}}">ABOUT</a></li>
                             <li><a href="{{URL::to('/features')}}">FEATURES</a></li>
                             <li><a href="{{URL::to('/faqs')}}">FAQS</a><li>
                             <li class="btn_hov">
                            
                        		<button type="button" class="Login" data-toggle="modal" data-target="#myModal2">LOGIN</button>
                        		<button type="button" class="sign_up " data-toggle="modal" data-target="#myModal">SIGN UP</button>
                        	
                             </li>
         				</ul>
                        
                    </div>
                </nav>
            </div>
        </div><!-- nav-section -->

    </header>  
    
    


    
    <div class="inner_body">
    	<div class="container">
        	<div class="row">
             	<div class="col-md-12 breadcrumb_info" align="center">

        			<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('http://localhost:8000')}}">home</a></li>
                        <li class="breadcrumb-item active">faqs</li>
        			</ol>
                 </div><!-- breadcrumb_info -->
                 
                 
                  <div class="col-md-12 abt_intro" align="center">
                    	
                        <h1>FREQUENTLY ASKED QUESTIONS</h1>
                        <h3></h3>
                          <br>
                        <h3>Q. How do I place my order?</h3>
<p>A. Once you have finished adding items to your shopping cart, move your cursor to the lower-right corner of the screen and click on the “Checkout” button. You will then be transferred to our secure server and asked to either create a new account or place an order without an account.</p><br>

  <h3>Q. How do I add items to my cart?</h3>
<p>A. To add a publication or other item to your cart, navigate to the page of the item you are interested in and then choose your desired version of that item (for publications, select Hardcopy, PDF, or Kindle). When you click the “Add to Cart” link, you will be brought to your "Shopping cart" page where you can then enter the quantity of the item that you would like to order using the "Qty" field on the right side of the screen.</p><br>

  <h3>Q. How do I remove items from my cart?</h3>
<p>A. First, click on the “View cart” link in the upper-right corner of your computer screen. This will allow you to view all items currently in your cart. Once you have identified the item that you would like to delete, click on the “Remove” check box to the left of the item description and then click "Update cart" in the lower-right corner to have your changes reflected. </p><br>

  <h3>Q. How do I change the quantity of a particular item in my cart?</h3>
<p>A. Once you have finished adding items to your shopping cart, move your cursor to the lower-right corner of the screen and click on the “Checkout” button. You will then be transferred to our secure server and asked to either create a new account or place an order without an account.</p><br>

  <h3>Q. How will I know that you have received my order?</h3>
<p>A. After you complete the checkout process. You will receive phone call and we will deliver your order in your location according to the conversation.</p><br>

  <h3>Q. What are your shipping charge</h3>
<p>A. Currently we are only delivery on Kathmandu valley only and it is totaly free shipping.</p><br>


                        
 
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
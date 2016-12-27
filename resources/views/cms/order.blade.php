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
                        <li class="breadcrumb-item"><a href="../index.php">home</a></li>
                        <li class="breadcrumb-item active">products</li>
        			</ol>
                 </div><!-- breadcrumb_info -->
                 
                 
                  <div class="col-md-12 product_det" align="center">
                                       	
                        <h1>OUR QUAILTY MEAT PRODUCTS</h1>
                        <h3>Mahalaxmi cold Store is Nepal’s first online order cold store</h3>
                     </div> <!-- end of intro -->
                  
                    
                    
                    <div class="col-sm-4 col-xs-6 product_type  " align="right">
                    	<div class="prd1 ">
                            <img src="../icons/mutton.jpg">
                            <h4>FRESH MUTTON</h4></br>
                            <span><a href="product_category.php">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                     
                     <div class="col-sm-4 col-xs-6 product_type " align="right">
                    	<div class="prd1 ">
                            <img src="../icons/beef.jpg">
                            <h4>FRESH MUTTON</h4></br>
                            <span><a href="product_category.php">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                     
                     <div class="col-sm-4 col-xs-6 product_type " align="right">
                    	<div class="prd1 ">
                            <img src="../icons/chicken.jpg">
                            <h4>FRESH MUTTON</h4></br>
                            <span><a href="product_category.php">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                     
                     <div class="col-sm-4 col-xs-6 product_type " align="right">
                    	<div class="prd1 ">
                            <img src="../icons/fish.jpg">
                            <h4>FRESH MUTTON</h4></br>
                            <span><a href="product_category.php">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                     
                     <div class="col-sm-4 col-xs-6 product_type " align="right">
                    	<div class="prd1 ">
                            <img src="../icons/ostrich.jpg">
                            <h4>FRESH MUTTON</h4></br>
                            <span><a href="product_category.php">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                     
                     <div class="col-sm-4 col-xs-6 product_type " align="right">
                    	<div class="prd1 ">
                            <img src="../icons/Sausage.jpg">
                            <h4>FRESH MUTTON</h4></br>
                            <span><a href="product_category.php">CLICK MORE</a></span>
                        </div>
                     
                     </div> <!-- end of order_type -->
                 
                 
                 
             </div><!-- row -->
         </div><!-- container -->
      </div><!-- inner_body -->
   


        
        
          
          
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
                                  <img src="../icons/tes.png" alt="Chania">
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
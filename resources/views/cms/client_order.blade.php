@extends('cms.front_layout.master')
@section('content')
<body>

<header>
                 @include('cms.front_includes.menu-bar');
        
    </header>  
    
    


    
    <div class="inner_body">
    	<div class="container">
        	<div class="row">
             	<div class="col-md-12 breadcrumb_info" align="center">

        			<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('/')}}">home</a></li>

                        <li class="breadcrumb-item active">add cart</li>
        			</ol>
                 </div><!-- breadcrumb_info -->
                 
                 
                 
                  <div class=" order">
                      <div class="col-md-4 product_type2 ">
                    	<div class="prd1 ">
                            <img src="{{URL::asset('uploads/product/thumbnail')}}/{{$product->image}}" class="img-responsive">
                        </div>
                     
                     </div> <!-- end of order_type -->
                     
                      <div class="col-md-8 ">
                      	<div>    	
                            <h1>{{$product->description}}</h1>
                            <h3>{{$product->title}}</h3>
                            <h4>Price : Rs. {{$product->price}}/- per kg</
                        </div>
                        
                        <div class="order_qty">     	
                            <h5>Price (incl. all taxes)</h5>
                            <h2>Rs. {{$product->price}}</h2>                      

                        </div>
                        <div class="order_qty2"> 
                        	<form method="POST" action="{{URL::to('/add-to-cart')}}?id={{$product->id}}">
                           @if(Auth::guard('frontAuth')->check())
                          <input type="hidden" value="{{Auth::guard('frontAuth')->user()->id}}" name="user_id" >
                          @endif
                          <br><lable> Quantity </lable><br>
                                <input type="text"  name="qty" class="ord_btn"/>/kg
                                <span> &nbsp; *Must be above 5 kg for home delivery </span><br>
                                
                                <select name="day" class="ord_btn ord_btn2">
                                    <option value="fri">Fri</option>
                                    <option value="sat">Sat</option>
                                    <option value="sun">Sun</option>
                                    <option value="mon">Mon</option>
                                     <option value="tue">Tue</option>
                                      <option value="wed">Wed</option>
                                </select>
                                <select name="time" class="ord_btn ord_btn2">
                                    <option value="8:00">8:00am</option>
                                    <option value="9:00">9:00am</option>
                                    <option value="10:00">10:00am</option>
                                    <option value="11:00">11:00am</option>
                                    <option value="12:00">12:00pm</option>
                                    <option value="13:00">13:00pm</option>
                                    <option value="15:00">15:00pm</option>
                                    <option value="16:00">16:00pm</option>
                                    <option value="17:00">17:00pm</option>
                                    <option value="18:00">18:00pm</option>
                                </select>
                                <br><br>
                                <input type="radio" name="type" value="self"> <i>Self Pick Up</i><br>
                                <input type="radio" name="type" value="home_delivery"> <i>Home Delivary</i><br>
                                <p> *Free Home Delivery in kathmandu Valley only</p>
                              @if (Session::has('message'))
                               <div class="alert alert-info">{{ Session::get('message') }}</div>
                              @endif
                                <input type="submit" class="cart_btn" value="ORDER NOW" >
                            </form>
                        </div>
                        
               
                     </div> <!-- end of intro -->
                 </div>
                     
                      
                     
                     
                    
                     
             
                 
                 
                 
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
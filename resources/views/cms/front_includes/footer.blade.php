  <div class="footer"> 

                             
     		<div class="container">
                <div class="row cont_bg">
                    <div class="col-sm-5 col-md-6">

                                             
                     </div> <!-- end of col -->
                     
                      <div class="col-sm-6 col-md-5">
                             
                         <div style="height:3px; background-color:#C52B29;"> 
                              
                            <div class="contact_det "> 
                            	<div class="contact_de">
                                     <h1>ADDRESS</h1> 
                                     <p>Mahalaxmi Cold Store bring you 24/7 hrs online support</p>
                                     <h6><img src="{{URL::asset('frontend/icons/address.png')}}"> <b>Address</b> : Mahalaxmi, Lalitpur</h6>                                            
                                </div>
                                
                                <div class="contact_de">
                                     <h1>CUSTOMER SUPPORT</h1> 
                                     <p>Mahalaxmi Cold Store bring you 24/7 hrs online support</p>
                                     <h6><img src="{{URL::asset('frontend/icons/call.png')}}"> <b>Phone </b>: 01-5510123 </h6> 
                                     <h6><img src=" {{URL::asset('frontend/icons/mob.png')}}" > <b>Mobile</b>: 9841-33-0747</h6>                                            
                                </div>
                                
                         	</div> 
                                              
                         </div>
                     </div> <!-- end of col -->
                     
                    
               
                     
                  </div>  <!-- end of row -->
            </div>
		 </div> <!-- end of testimonials -->
         
          
        <div class="copyright" align="center">
        	<p> © 2016, made with by <span>Bikaash</span></p>
        </div>  
          
   
   </div>



  <!--Sign in model-->

  <!-- Modal -->

  <div class="modal fade log_model_bg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content ">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Log In</h4>
              </div>
              <div class="modal-body">
                  <form data-toggle="validator" role="form" method="POST" action="/postLogin"> <div class="form-group">
                          <label for="inputName" class="control-label">Username</label>
                          <input type="text" class="form-control " id="inputName" placeholder="Full Name"  name="username" required>
                      </div>

                      <div class="form-group">
                          <label for="inputPassword" class="control-label">Password</label>
                          <input type="password" data-minlength="6" class="form-control " id="logpassword" placeholder="Password"  name="password" required>
                      </div>
                      



              </div>
              <div class="modal-footer">
                  <div class="form-group">
                                          <input type="submit" name="submit" value="Log In" class="Log_in" />
                  </div>
              </div>
              </form>

          </div>
      </div>
  </div>



  <!--Sign up model-->

<!-- Modal -->
      
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                              </div>
                              <div class="modal-body">

                                <form data-toggle="validator" role="form" method="POST" action="{{URL::to('/postRegister')}}">
                          <div class="form-group">
                            <label for="inputName" class="control-label">Name</label>
                            <input type="text" class="form-control " id="inputName" placeholder="Full Name"  name="name" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid"  name="email" required>
                            <div class="help-block with-errors"></div>
                          </div>
                                              
                          <div class="form-group">
                            <label for="inputName" class="control-label">Phone</label>
                            <input type="text" class="form-control " id="inputName" placeholder="Mobile"  name="phone" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="inputName" class="control-label">Address</label>
                            <input type="text" class="form-control " id="inputName" placeholder="Location, Street"  name="address" required>
                          </div>
                          
                          
                          <div class="form-group">
                            <label for="inputPassword" class="control-label ">Password</label>
                            <div class="form-inline row">
                              <div class="form-group col-sm-6">
                                <input type="password" data-minlength="6" class="form-control " id="inputPassword" placeholder="Password"  name="password" required>
                                <div class="help-block">Minimum of 6 characters</div>
                              </div>
                              <div class="form-group col-sm-6">
                                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" value="Male" required>
                                Male
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" value="Female" required>
                                Female
                              </label>
                            </div>
                          </div>
                          
                   		<!-- 	</div> -->
      <div class="modal-footer">
        <div class="form-group">
     <input type="submit" name="submit" value="Sign Up" class="Log_in" />
  </div>
      </div>
                        </form>
      
    </div>
  </div>
</div>


</body>


 

    <!--   Core JS Files   -->
    <script src="{{URL::asset('frontend/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>


<!--nice scroll    -->
<script src="{{URL::asset('frontend/js/jquery.nicescroll.js')}}"></script>

<script>
  $(document).ready(function() {
  
	var nice = $("html").niceScroll();  // The document page (body)
	
  });
  
 <!--end nice scroll    --> 
  
  
</script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{URL::asset('frontend/projects/assets/js/bootstrap-checkbox-radio.js')}}"></script>


    <!--  Notifications Plugin    -->
    <script src="{{URL::asset('frontend/projects/assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script src="{{URL::asset('frontend/projects/assets/js/googleapis_map.js')}}">
    </script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{URL::asset('frontend/projects/assets/js/demo.js')}}"></script>


    
<script src="{{URL::asset('frontend/projects/assets/js/validation.js')}}"></script>

<!--Delete Alert-->
    
   
<script>	

$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".nav_main").affix({offset: {top: $(".home-banner-section").outerHeight(true)} });
});




</script>






</html>

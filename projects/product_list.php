<?php 
include 'header.php';
include 'sidebar.php';
include 'top_menu.php';

?>
   


        <div class="content">
            <div class="container-fluid">
                
                
                
                
                <!-- New order list and past order list -->
                
   
   
   
   
                <div class="row">
                    <div class="col-md-12">
                    
                    <h4 class="title ">New Order</h4>

                   
                     <button type="button" class="User_Add" data-toggle="modal" data-target="#myModal">
 Add Product
</button>
                    
                    
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead class="table_header">
                                        <th></th>
                                        <th>ID</th>
                                    	<th>Product Name</th>
                                        <th>Price</th>
                                        <th>Last Update</th>
                                      
                                        
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                    
                                    	<tr>
                                        	<td></td>
                                            <td>1</td>
                                        	<td>Popular</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        	
                                        	<td>
                                                <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
											</td>
                                        </tr>
                                        
                                        <tr>
                                        	<td></td>
                                            <td>2</td>
                                        	<td>Chicken</td>
                                            <td>Rs.350/kg</td>
                                            <td>24th Jun,2016</td>
                                        	
                                        	<td>
                                                <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
											</td>
                                        </tr>
                                        
                                         <tr>
                                        	<td></td>
                                            <td>3</td>
                                        	<td>Mutten</td>
                                            <td>Rs.860/kg</td>
                                            <td>24th Jun,2016</td>
                                        	
                                        	<td>
                                                <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
											</td>
                                        </tr>
                                        
                                         <tr>
                                        	<td></td>
                                            <td>4</td>
                                        	<td>Ostrich</td>
                                            <td>Rs.1450/kg</td>
                                            <td>24th Jun,2016</td>
                                        	
                                        	<td>
                                                <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
											</td>
                                        </tr>
                                        
                                         <tr>
                                        	<td></td>
                                            <td>5</td>
                                        	<td>Sausage</td>
                                            <td>Rs.250/kg</td>
                                            <td>24th Jun,2016</td>
                                        	
                                        	<td>
                                                <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
											</td>
                                        </tr>
                                        
                                         <tr>
                                        	<td></td>
                                            <td>6</td>
                                        	<td>Other</td>
                                            <td>N/A</td>
                                            <td>24th Jun,2016</td>
                                        	
                                        	<td>
                                                <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
											</td>
                                        </tr>
                                        
                                         
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    

                </div>

                
                
                
                
                
                <!--<div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-timer"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2015 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--> <!-- pie chart -->
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
             
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.mahalaxmicoldstore.com.np">Bikaash</a>
                </div>
            </div>
        </footer>

    </div>
</div>



<!--Sign up model-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                              </div>
                              <div class="modal-body">
                                <form data-toggle="validator" role="form">
                          <div class="form-group">
                            <label for="inputName" class="control-label">Name</label>
                            <input type="text" class="form-control " id="inputName" placeholder="Full Name" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword" class="control-label ">Password</label>
                            <div class="form-inline row">
                              <div class="form-group col-sm-6">
                                <input type="password" data-minlength="6" class="form-control " id="inputPassword" placeholder="Password" required>
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
                                <input type="radio" name="gender" required>
                                Male
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" required>
                                Female
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                                Read our terms and condition
                              </label>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                   			</div>
      <div class="modal-footer">
        <div class="form-group">
    <button type="submit" class="User_Add">Submit</button>
  </div>
      </div>
                        </form>
      
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>

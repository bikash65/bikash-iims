<?php 
include_once('../cms/dbFunction.php');
include 'header.php';
include 'sidebar.php';
include 'top_menu.php';
$funObj =new dbFunction();
$users = $funObj->getUserData();
?>


    


        <div class="content">
            <div class="container-fluid">
                
                
                
                
                <!-- New order list and past order list -->
                
   
   
   
   
                <div class="row">
                    <div class="col-md-12">
                    
                    <h4 class="title ">All Users</h4>

                   
                     <button type="button" class="User_Add" data-toggle="modal" data-target="#myModal">
 Add User
</button>
                    
                    
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead class="table_header">
                                        <th></th>
                                        <th>ID</th>
                                    	<th>Name</th>
                                        <th>Gender</th>
                                        <th>Adress</th>
                                        <th>Phone</th>
                                    	<th>Joined On</th>
                                        
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                         <?php 
										 $counter=1;
										 foreach($users as $user) {
						
											  ?>
                                        <tr>
                                 			<td></td>
                                        	<td><?php echo $counter++;?></td>
                                            <td><?php echo $user['username'];?></td>
                                            <?php if ($user['gender'] == 0) { $gender ='Male';}else{$gender='Female';} ?>
                                            <td><?php echo $gender;?></td>
                                            <td><?php echo $user['address'];?></td>
                                        	<td><?php echo $user['phone'];?></td>
                                        	<td><?php echo  $user['date'] ;?>
                                              </td>
                                        	<td>
                                                <button type="button" class="edit2" data-toggle="modal" data-target="#myModal">
                                                	<a href="#"style="display:inline-block;"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                                </button>
                                                <button class="remove"><img src="../icons/delete.png"></button>
											</td>
                                        </tr>
                                        <?php } ?>
                                        
                                       
                                         
                                        
                                        
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
    <div class="modal-content">
      <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                              </div>
                              <div class="modal-body">
                                <form data-toggle="validator" role="form" method="POST" action="register.php">
                          <div class="form-group">
                            <label for="inputName" class="control-label">Name</label>
                            <input type="text" class="form-control " id="inputName" placeholder="Full Name"  name="username" required>
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
                                <input type="radio" name="gender" value="0" required>
                                Male
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" value="1" required>
                                Female
                              </label>
                            </div>
                          </div>
                          
                   			</div>
      <div class="modal-footer">
        <div class="form-group">
     <input type="submit" name="submit" value="Add" class="User_Add" />
  </div>
      </div>
                        </form>
      
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>

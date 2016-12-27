@extends('cms.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">




        <!-- New order list and past order list -->





        <div class="row">
            <div class="col-md-12">
            				@include('flash::message')
                <h4 class="title ">New Order</h4>


                {{--<button type="button" class="User_Add" data-toggle="modal" data-target="#myModal">
                    Add User
                </button>--}}


                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead class="table_header">
                            <th></th>
                           
                            <th>Name</th>
                            <th>Gender</th>
                              <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Joined On</th>
                            

                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                            <tr>
                                <td></td>
                                
                                <td>{{$item->name}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->created_at}}</td>
                                
                                <td>
                                    
                                    <a href="{{URL::to('/clientDelete?id='.$item->id)}}" onClick="javascript:return confirm('are you sure ?')" class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            





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
                <h4 class="modal-title" id="myModalLabel">Add User</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="register.php">
                    <div class="form-group">
                        <label for="inputName" class="control-label">Name</label>
                        <input type="text" class="form-control " id="inputName" placeholder="Full Name" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="control-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="control-label">Phone</label>
                        <input type="text" name="phone" class="form-control " id="inputName" placeholder="Mobile" required>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="control-label">Address</label>
                        <input type="text" name="address"  class="form-control " id="inputName" placeholder="Location, Street" required>
                    </div>


                    <div class="form-group">
                        <label for="inputPassword" class="control-label ">Password</label>
                        <div class="form-inline row">
                            <div class="form-group col-sm-6">
                                <input type="password" data-minlength="6" class="form-control " name="password" id="inputPassword" placeholder="Password" required>
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
                    <input type="submit" name="submit" value="Add" class="User_Add" />
                </form>
            </div>
            <div class="modal-footer">
                <div class="form-group">

                </div>
            </div>
            @stop


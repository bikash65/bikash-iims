@extends('cms.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">




        <!-- New order list and past order list -->





        <div class="row">
            <div class="col-md-12">

                <h4 class="title ">Products</h4>


                <button type="button" class="User_Add" data-toggle="modal" data-target="#myModal">
                    Add Product
                </button>


                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead class="table_header">
                            <th></th>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Last Update</th>


                            <th>Action</th>
                            </thead>
                            <tbody>
                            <?php
                             $i=1;
                            ?>
                              @foreach ($products as $product)
                            <tr>
                                <td></td>
                                <td>{{$i++}}</td>
                                <td>{{$product->category->title}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->created_at}}</td>

                                <td>
                                    <a href="{{URL::to('/edit-product')}}?id={{$product->id}}"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                    <a href="{{URL::to('/delete-product')}}?id={{$product->id}}"><i class="fa fa-trash delete" aria-hidden="true"></i></a>
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
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Product</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" role="form" method="POST" action="{{URL::to('/add-product')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputName" class="control-label">Title</label>
                        <input type="text" class="form-control " id="inputName" name="title">
                    </div>

                          <div class="form-group">
                        <label for="inputName" class="control-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="inputEmail"> </textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="control-label">Price</label>
                        <input type="text" class="form-control " id="inputName" name="price">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="control-label ">Category</label>
                        <div class="form-inline row">
                            <div class="form-group col-sm-6">
                        <select name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                        </select>
                            </div>>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <input type="submit" value="Add" class="User_Add">
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
    @stop

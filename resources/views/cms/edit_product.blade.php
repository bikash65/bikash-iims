@extends('cms.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">




        <!-- New order list and past order list -->





        <div class="row">
            <div class="col-md-12">

                <h4 class="title ">Edit Product</h4>


                <div class="card">
                    <div class="content table-responsive table-full-width">
                                    <form method="POST" enctype="multipart/form-data" action="{{URL::to('/edit-single-product')}}?id={{$product->id}}">
             {{ csrf_field() }}
                   <div class="form-group">
                        <label for="inputName" class="control-label">Title</label>
                        <input type="text" class="form-control" value="{{$product->title}}" id="inputName" name="title">
                    </div>
                    <div class="form-group">
                   <label for="inputName" class="control-label">Image</label>
                  <input type="file" class="form-control" name="image">
                </div>

                    <div class="form-group">
                        <label for="inputEmail" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="inputEmail">{{$product->description}} </textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="control-label">Price</label>
                        <input type="text" class="form-control " value="{{$product->price}}" id="inputName" name="price">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="control-label ">Category</label>
                        <div class="form-inline row">
                            <div class="form-group col-sm-6">
                        <select name="category_id">
                        @foreach ($categories as $category)
                        @if ($category->id == $product->category_id)
                        <option value="{{$category->id}}" selected>{{ $category->title}}</option>
                        @else
                        <option value="{{$category->id}}">{{ $category->title}}</option>
                        @endif
                        @endforeach
                        </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <input type="submit" value="Edit" class="category_edit">
                </div>
            </div>
            </form>

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

    @stop
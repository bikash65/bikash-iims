@extends('cms.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">




        <!-- New order list and past order list -->





        <div class="row">
            <div class="col-md-12">

                <h4 class="title ">Category</h4>


                <button type="button" class="User_Add" data-toggle="modal" data-target="#myModal">
                    Add Category
                </button>


                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead class="table_header">
                            <th>ID</th>
                            <th>Category Title</th>
                            <th>Description</th>
                            <th>Created At</th>


                            <th>Action</th>
                            </thead>
                            <tbody>
                           <?php $i=1;?>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->created_at}}</td>

                                <td>
                                        <!--   <button type="button"  data-toggle="modal" data-target="#editModal"> -->
                                        <a href="{{URL::to('/edit-category')}}?id={{$category->id}}"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                        <a href="{{URL::to('/delete-category')}}?id={{$category->id}}" ><i class="fa fa-trash delete" aria-hidden="true"></i></a>
                                  <!--   </button> -->
                                <!--     <button class="remove" id="{{$category->id}}" onClick="reply_click(this.id)"><i class="fa fa-trash delete" aria-hidden="true"></i></button> -->
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
                <h4 class="modal-title" id="myModalLabel">Add Category</h4>
            </div>
            <div class="modal-body">
             <form data-toggle="validator" role="form" method="POST" enctype="multipart/form-data" action="{{URL::to('/add_category')}}">
             {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputName" class="control-label">Title</label>
                        <input type="text" class="form-control " name="title" id="inputName">
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-body">
             <form data-toggle="validator" role="form" method="POST" action="{{URL::to('/edit_category')}}">
             {{ csrf_field() }}
                    <div class="form-group title">
                        <label for="inputName" class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" id="inputName">
                    </div>

                    <div class="form-group description">
                        <label for="inputEmail" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="inputEmail"> </textarea>
                        <div class="help-block with-errors"></div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <input type="submit" value="Edit" class="Category_edit">
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
    @stop

    <script type="text/javascript">
function reply_click(clicked_id)
{
    $.ajax({
      url: '/delete-category',
      type: "get",
      data: {'id':clicked_id},
      success: function(data){
        console.log(data);
      }
    }); 
}
</script>

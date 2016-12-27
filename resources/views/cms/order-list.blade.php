@extends('cms.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- New order list and past order list -->





        <div class="row">
            <div class="col-md-12">

                <h4 class="title">New Order</h4>
                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead class="table_header">
                            <th></th>
                            <th>Name</th>
                            <th>Adress</th>
                            <th>Phone</th>
                            <th>Create</th>
                            <th>Delivery</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td></td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->address}}</td>
                                <td>{{$order->user->phone}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>26 Jun, 2016</td>
                                <td>
                                    <a href="#" class="actived" style="display:none;">Active</a>
                                    <a href="#" class="Pending" style="display:inline-block;">Pending</a>
                                    <a href="#"><i class="fa fa-pencil edit" aria-hidden="true"></i></a>
                                    <button class="remove"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
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
@stop

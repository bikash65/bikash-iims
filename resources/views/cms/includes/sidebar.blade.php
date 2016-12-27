<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

       

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{URL::to('/')}}" class="simple-text logo_edit">
                    <img src=" {{URL::asset('cms/assets/img/favicon.png')}}">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{URL::to('/dashboard')}}">
                       <i class="fa fa-th-large" aria-hidden="true"></i>

                        <p>Dashboard</p>
                    </a>
                </li> 
                {{--<li>
                    <a href="{{URL::to('/user')}}">
                        <i class="fa fa-user f_size" aria-hidden="true"></i>
                        <p>Users</p>
                    </a>
                </li>--}}
                <li>
                    <a href="{{URL::to('/clients')}}">
                        <i class="fa fa-user f_size" aria-hidden="true"></i>
                        <p>Clients</p>
                    </a>
                </li>
                     <li>
                    <a href="{{URL::to('/category')}}">
                       <i class="fa fa-tag" aria-hidden="true"></i>


                        <p>Category List</p>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/product-list')}}">
                        <i class="fa fa-file-text f_size" aria-hidden="true"></i>

                        <p>Product List</p>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/order-detail')}}">
                        <i class="fa fa-truck f_size" aria-hidden="true"></i>
                        <p>Orders</p>
                    </a>
                </li>
     
                <li>
                    <a href="{{URL::to('/testimonals')}}">
                        <i class="fa fa-envelope f_size" aria-hidden="true"></i>
                        <p>Testimonials</p>
                    </a>
                </li>

                <li>
                    <a href="{{URL::to('/testimonals')}}">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>

                        <p>History</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
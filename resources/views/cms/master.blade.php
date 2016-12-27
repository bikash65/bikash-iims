<!doctype html>
<html style="overflow-y: visible;" xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('frontend/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('frontend/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Mahalaxmi Cold Store</title>


    <link href="{{URL::asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="  {{URL::asset('frontend/assets/css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('frontend/css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('frontend/css/query.css')}}" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/engine0/style.css')}}" />

    <script type="text/javascript" src="{{URL::asset('frontend/engine0/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->



</head>

<body>

<header>

    <div class="nav-section nav_main clearfix">
        <div class="container ">
            <nav class="navbar-wrapper navbar-default nav_def" role="navigation" >
                <div class="navbar-header tog_btn">

                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <div class="logo">
                        <a href="#"><img src="{{URL::asset('frontend/icons/logo.png')}}"></a>
                    </div>
                </div>

                <div class="navbar-collapse collapse nav_cos " >
                    <ul class="nav navbar-nav main-nav nav_ul">
                        <li><a href="pages/about.php">ABOUT</a></li>
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">FAQS</a><li>
                        <li class="btn_hov">

                            <button type="button" class="Login" data-toggle="modal" data-target="#myModal2">LOGIN</button>
                            <button type="button" class="sign_up " data-toggle="modal" data-target="#myModal">SIGN UP</button>

                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div><!-- nav-section -->


    <div class="home-banner-section clearfix">
        <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container0">
            <div class="ws_images"><ul>
                    <li><img src="{{URL::asset('frontend/images/home-banner/1.jpg')}}" alt="bootstrap carousel" title="" id="wows0_0"/></li>

                    <!--<li><img src="images/home-banner/1.jpg" alt="bootstrap carousel" title="<b>ɪkɪˈbɑːnə </b> The Art of Flower Arrangement" id="wows0_0"/></li>-->

                </ul></div>

            <div class="ws_shadow"></div>
        </div>
        <script type="text/javascript" src="{{URL::asset('frontend/engine0/wowslider.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('frontend/engine0/script.js')}}"></script>
        <!-- End WOWSlider.com BODY section -->


    </div><!-- end of home-banner-section -->







    <div class="head_det ">

        <div class="container ">
            <div class="row head_det2">

                <div class="banner_details " align="center">
                    <div class="head_lin">
                        <div class="ban_headline">
                            <h1>Nepal’s first online cold store</h1>
                            <h3>Mahalaxmi cold Store is Nepal’s first online order cold store</h3>
                        </div>
                    </div>

                </div>  <!--banner_details-->

                <div class="row prod_div ">
                    <div class="col-sm-2 col-sm-offset-1 product">
                        <div class="all_prod product1">
                            <a href="#"><img src="  {{URL::asset('frontend/icons/meat1.png')}}" class="img-responsive">
                                <span>Chicken</span></a>
                        </div>
                    </div>

                    <div class="col-sm-2 product">
                        <div class="all_prod product2">
                            <a href="#"><img src=" {{URL::asset('frontend/icons/meat2.png')}}" class="img-responsive">
                                <span>Mutten</span></a>
                        </div>
                    </div>

                    <div class="col-sm-2 product">
                        <div class="all_prod product3">
                            <a href="#"><img src=" {{URL::asset('frontend/icons/meat3.png')}}" class="img-responsive">
                                <span>Ostrich</span></a>
                        </div>
                    </div>

                    <div class="col-sm-2 product">
                        <div class=" all_prod product4">
                            <a href="#"><img src=" {{URL::asset('frontend/icons/meat4.png')}}" class="img-responsive">
                                <span>Sausage</span></a>
                        </div>
                    </div>

                    <div class="col-sm-2 product produt">
                        <div class="all_prod product5">
                            <a href="#"><img src="{{URL::asset('frontend/icons/meat5.png')}}" class="img-responsive">
                                <span>Other</span></a>
                        </div>
                    </div>

                </div>

            </div><!--row-->
        </div> <!--container-->
    </div>

</header>



@yield('content')


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
                            {{URL::asset('frontend/icons/address.png')}}
                            <p>Mahalaxmi Cold Store bring you 24/7 hrs online support</p>
                            <h6><img src=" {{URL::asset('frontend/icons/address.png')}}"> <b>Address</b> : Mahalaxmi, Lalitpur</h6>
                        </div>

                        <div class="contact_de">
                            <h1>CUSTOMER SUPPORT</h1>
                            <p>Mahalaxmi Cold Store bring you 24/7 hrs online support</p>
                            <h6><img src="{{URL::asset('frontend/icons/call.png')}}"> <b>Phone </b>: 01-5510123 </h6>
                            <h6><img src="{{URL::asset('frontend/icons/mob.png')}}" > <b>Mobile</b>: 9841-33-0747</h6>
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
                <form data-toggle="validator" role="form" method="POST" action="projects/register.php"> <div class="form-group">
                        <label for="inputName" class="control-label">Username</label>
                        <input type="text" class="form-control " id="inputName" placeholder="Full Name"  name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="control-label">Password</label>
                        <input type="password" data-minlength="6" class="form-control " id="logpassword" placeholder="Password"  name="password" required>
                    </div>
                    <div class="error_msg">Username or password not match</div>



            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="forget"> <a href="#">Forgot your password ?</a></div>
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
                <form data-toggle="validator" role="form" method="POST" action="projects/register.php">
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
<script src="{{URL::asset('frontend/js/bootstrap-checkbox-radio.js')}}"></script>


<!--  Notifications Plugin    -->
<script src="{{URL::asset('frontend/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script src="{{URL::asset('frontend/js/googleapis_map.js')}}">
</script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{URL::asset('frontend/js/paper-dashboard.js')}}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{URL::asset('frontend/js/demo.js')}}"></script>



<script src="{{URL::asset('frontend/js/validation.js')}}"></script>

<!--Delete Alert-->


<script>

    $(document).ready(function(){
        /* affix the navbar after scroll below header */
        $(".nav_main").affix({offset: {top: $(".home-banner-section").outerHeight(true)} });
    });




</script>






</html>

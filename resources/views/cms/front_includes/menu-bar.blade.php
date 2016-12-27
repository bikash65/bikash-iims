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
                                <a href="#"><img src=" {{URL::asset('frontend/icons/logo.png')}}"></a>
                            </div>
                    </div>

                    <div class="navbar-collapse collapse nav_cos " >
                        <ul class="nav navbar-nav main-nav nav_ul">
                            <li><a href="{{URL::to('/about')}}">ABOUT</a></li>
                             <li><a href="{{URL::to('/features')}}">FEATURES</a></li>
                             <li><a href="{{URL::to('/faqs')}}">FAQS</a><li>
                             @if(Auth::guard('frontAuth')->check())
                             <li class="btn_hov">
                            
                                <div class="dropdown account_us">
                                  <button class="account_user" type="button" data-toggle="dropdown"><img src="{{URL::asset('frontend/icons/user.png')}}"> 
                            {{Auth::guard('frontAuth')->user()->name}}
                                  <span class="caret"></span></button>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="{{URL::to('/logout')}}">Log Out</a></li>
                      
                                  </ul>  
                                  
                    
                                </div>
                                
                                <div class="carts">
                                   
                                </div>
                               
                             </li>
                             @else
                             <li class="btn_hov">
                                    
                                <button type="button" class="Login" data-toggle="modal" data-target="#myModal2">LOGIN</button>
                                <button type="button" class="sign_up " data-toggle="modal" data-target="#myModal">SIGN UP</button>
                            
                             </li>
                             @endif
                             
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div><!-- nav-section -->
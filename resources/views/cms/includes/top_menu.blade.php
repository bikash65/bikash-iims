<div class="main-panel">
    <nav class="navbar navbar-default ">
        <div class="container-fluid header_bg ">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse ">
                <ul class="nav navbar-nav navbar-right ">

                    
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                            <p class="notification"></p>
                            <p>Admin</p>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::to('/logOut')}}">Log Out</a></li>

                        </ul>

                    </li>
                </ul>

            </div>
        </div>
    </nav>



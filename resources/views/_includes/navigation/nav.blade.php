<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <!--<a class="brand" href="#"><img src="{{asset('images/logo2.png')}}" style="height:19px; width:100px;"/></a>-->
                     
            <a class="brand" href="#"><strong>Inventory System</strong></a>
              
              
            <a class="brand" href="#"></a>
                <div class="nav-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">        
                        <li><a href="#"><i class="icon-film"></i>  Dashboard</a></li>
                        <li class="{{Nav::isResource('brand')}}"><a href="{{route('brand.index')}}"><i class="icon-barcode"></i>  Brand</a></li>        
                        <li id="navCategories"><a href="categories.php"> <i class="icon-list"></i> Category</a></li>
                        <li id="navProduct"><a href="product.php"> <i class="icon-tag"></i> Product </a></li>     
                        <li class="dropdown" id="navOrder">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="icon-shopping-cart"></i> Orders <span class="caret"></span></a>
                    <ul class="dropdown-menu">            
                        <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Add Orders</a></li>            
                        <li id="topNavManageOrder"><a href="orders.php?o=manord"> <i class="glyphicon glyphicon-edit"></i> Manage Orders</a></li>            
                    </ul>
                    </li> 
                        <li id="navReport"><a href="report.php"> <i class="icon-check"></i> Report </a></li>       
               
            </ul>
                @if(Auth::check())
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> {{Auth::user()->email}} <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">Profile</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="{{route('manage.dashboard')}}">Manage</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{route('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @else
                    <ul class="nav pull-right">
                        <li>
                            <a href="{{route('getLogin')}}">Login</a>
                        </li>
                        <li>
                            <a href="{{route('getRegister')}}">Register</a>
                        </li>
                    </ul>
                        @endif


                <ul class="nav">
                   <!-- <li>
                        <a href="#">Dashboard</a>
                    </li> -->
                    <!--
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="#">Tools <i class="icon-arrow-right"></i>

                                </a>
                                <ul class="dropdown-menu sub-menu">
                                    <li>
                                        <a href="#">Reports</a>
                                    </li>
                                    <li>
                                        <a href="#">Logs</a>
                                    </li>
                                    <li>
                                        <a href="#">Errors</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">SEO Settings</a>
                            </li>
                            <li>
                                <a href="#">Other Link</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Other Link</a>
                            </li>
                            <li>
                                <a href="#">Other Link</a>
                            </li>
                        </ul>
                    </li>-->

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!doctype html>
<html class="no-js" lang="en">

@include('admins.pages.head')
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

           @include('admins.pages.sidebar')

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->

        </div>
        <!-- Password meter Start -->
        <div class="password-meter-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                </div>
                            </div>
                            <form action="{{route('create.users')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="sparkline10-graph">
                                <div id="pwd-container3">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="nom"  placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Prenom</label>
                                        <input type="text" class="form-control" id="username" name="prenom"  placeholder="Prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="password3">email</label>
                                        <input type="email" class="form-control example3" id="password3" name="email" ">
                                    </div>

                                    <div class="form-group">
                                        <label for="password3">Tel</label>
                                        <input type="text" class="form-control example3" id="password3" name="tel" >
                                    </div>
                                    <div class="form-group">
                                        <label for="password3">Password</label>
                                        <input type="password" class="form-control example3" id="password3" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password3">Profile</label>
                                        <input type="password" class="form-control example3" id="password3" name="password_confirm">
                                    </div>
                                    <div class="form-group">
                                        <label for="password3">Profile</label>
                                        <input type="file" class="form-control example3" id="password3" name="profile">
                                    </div>
                                    <div class="form-group">
                                        <label for="password3"></label>
                                        <input type="submit" class="form-control example3" value="Envoyer">
                                    </div>
                                    <div class="form-group">
                                        <div class="pwstrength_viewport_progress2"></div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Password meter End-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admins.pages.js')

</body>

</html>

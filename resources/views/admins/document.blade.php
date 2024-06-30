<!doctype html>
<html class="no-js" lang="en">

@include('admins.pages.head')
<style>
    .center-form {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Minimum height for full-screen centering */
    }

    .form-container {
        width: 100%;
        max-width: 600px; /* Set a max width for the form */
    }
</style>
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
                        <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
        </div>

        <!-- Password meter Start -->
        <div class="password-meter-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="center-form">
                        <div class="form-container">
                            <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                                <div class="sparkline10-hd">
                                    <div class="main-sparkline10-hd"></div>
                                    <form action="{{route('add.Document')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                                                                @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li style="color: red;">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="sparkline10-graph">
                                            <div id="pwd-container3">
                                                <div class="form-group">
                                                    <label for="username">Titre</label>
                                                    <input type="text" class="form-control" id="username" name="nom">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Numéro du registre</label>
                                                    <input type="text" class="form-control" id="username" name="numer_registre">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Document</label>
                                                    <input type="file" class="form-control" id="username" name="doc">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Password meter End -->
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

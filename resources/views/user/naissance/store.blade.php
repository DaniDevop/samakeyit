<!doctype html>
<html class="no-js" lang="en">

@include('user.pages.head')


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('user.pages.sidebar')

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
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Listes des demande de naissances</h4>
                            <div class="add-product">
                            </div>
                            <h1 style="color:blue;">Formulaire Acte de Naissance    </h1>
                                        @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red;">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
        <form  action="{{route('demande.ActeNaissace')}}" method="POST" style="background-color:white;">
            @csrf
            <label for="numeroRegistre">Numéro de registre:</label><br>
            <input type="text" id="numeroRegistre " class="form-control" name="numero_registre"><br>

            <label for="nomPrenomPere">Nom et prénom du père:</label><br>
            <input type="text" id="nomPrenomPere" class="form-control" name="nom_pere"><br>


            <label for="nomPrenomPere">Nom et prénom de la mère:</label><br>
            <input type="text" id="nomPrenomPere" class="form-control" name="nom_mere"><br>

            <label for="anneeNaissance">Année de naissance:</label><br>
            <input type="date" id="anneeNaissance" class="form-control" name="annee_de_naissance"><br>

            <label for="nomDepartement">Nom de votre département:</label><br>
            <input type="text" id="nomDepartement" class="form-control" name="departement"><br>

            <input type="hidden" name="id" class="form-control" value="{{ $users[0]->id}}"><br>

            <input type="submit" class="form-control" value="Envoyer">
        </form>
                            <div class="custom-pagination">
								<ul class="pagination">
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include('user.pages.js')
</body>

</html>

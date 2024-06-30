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
                            <h4></h4>
                            <div class="add-product">
                            </div>
                            <h1 style="color:blue;">Formulaire de mise à jour Acte de Naissance    </h1>
                                        @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red;">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form  action="{{route('update.ActeMariage')}}" method="POST" style="background-color:whithe;">
            @csrf
            <label for="numeroRegistre">Numéro de registre:</label><br>
            <input type="text" id="numeroRegistre" name="numero_registre" class="form-control" value="{{$Models->numero_registe}} "><br>

            <label for="nomPrenomPere">Nom et prénom du père:</label><br>
            <input type="text" id="nomPrenomPere" class="form-control" name="nom_pere" value="{{$Models->nom_pere}} "><br>


            <label for="nomPrenomPere">Nom et prénom de la mère:</label><br>
            <input type="text" id="nomPrenomPere" class="form-control" name="nom_mere" value="{{$Models->nom_mere}} "><br>

            <label for="anneeNaissance">Année de naissance:</label><br>
            <input type="text" id="anneeNaissance" class="form-control" name="annee_de_naissance" value="{{$Models->annee_de_naissance}} "><br>

            <label for="nomDepartement">Nom de votre département:</label><br>
            <input type="text" id="nomDepartement" class="form-control" name="departement"  value="{{$Models->departement}}"><br>

            <input type="hidden" name="id" value="{{$Models->id}}">

            <input type="submit" value="Envoyer">
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

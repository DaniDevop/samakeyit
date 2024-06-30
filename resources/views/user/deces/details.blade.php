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
                            <div class="add-product">
                            </div>
                                        @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red;">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form id="acteDecesForm" action="{{route('deces.update.users')}}" method="POST">
      <div>
        @csrf
        <label for="numero_registre">Numéro du registre :</label><br>
        <input type="text" id="numero_registre" class="form-control" name="numero_registre" value="{{$DecesModel->numero_registre}}" >
      </div><br>

      <div>
        <label for="centre">Centre :</label><br>
        <input type="text" id="centre" name="centre"  class="form-control" value="{{$DecesModel->centre}}">
      </div><br>

      <div>
        <label for="date_deces">Date du décès :</label><br>
        <input type="date" id="date_deces" name="date_deces" class="form-control" value="{{$DecesModel->date_deces}}">
      </div><br>

      <div>
        <label for="lieu_deces">Lieu du décès :</label><br>
        <input type="text" id="lieu_deces" name="lieu_deces" class="form-control" value="{{$DecesModel->lieu_deces}}" >
      </div><br>

      <div>
        <label for="sexe">Sexe :</label><br>
        <select id="sexe" name="sexe" >
            <option value="{{$DecesModel->sexe}}">{{$DecesModel->sexe}}</option>
          <option value="homme">Homme</option>
          <option value="femme">Femme</option>
        </select>
      </div><br>

      <div>
        <label for="date_naissance">Date de naissance du défunt(e) :</label><br>
        <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{$DecesModel->date_naissance}}">
      </div><br>

      <div>
        <label for="nom_pere">Nom du père du défunt(e) :</label><br>
        <input type="text" id="nom_pere" name="nom_pere" class="form-control" value="{{$DecesModel->nom_pere}}" >
      </div><br>

      <div>
        <label for="nom_mere">Nom de la mère du défunt(e) :</label><br>
        <input type="text" id="nom_mere" name="nom_mere" class="form-control"  value="{{$DecesModel->nom_mere}}">
      </div><br>
      <input type="hidden" id="nom_mere" name="id"  value="{{$DecesModel->id}}">

      <input type="submit" value="Soumettre">
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

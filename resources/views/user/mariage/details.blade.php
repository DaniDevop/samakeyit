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

        <form id="acteNaissanceForm" action="{{route('update.ActeMariages.app')}}" method="POST" style="background-color:white;">
            @csrf
      <div>
        <label for="numero_registre_mariage">Numéro du registre de mariage :</label><br>
        <input type="text" id="numero_registre_mariage" class="form-control" name="numero_registre_mariage" value="{{$Demande->numero_registre_mariage}}" >
      </div><br>

      <div>
        <label for="centre">Centre :</label><br>
        <input type="text" id="centre" name="centre"  class="form-control" value="{{$Demande->centre}}" >
      </div><br>

      <div>
        <label for="date_mariage">Date du mariage :</label><br>
        <input type="date" id="date_mariage" name="date_mariage" class="form-control" value="{{$Demande->date_mariage}}" >
      </div><br>

      <div>
        <label for="lieu_mariage">Lieu du mariage :</label><br>
        <input type="text" id="lieu_mariage" name="lieu_mariage" class="form-control" value="{{$Demande->lieu_mariage}}" >
      </div><br>

      <div>
        <label for="date_naissance_marie">Date de naissance du marié :</label><br>
        <input type="date" id="date_naissance_marie" name="date_naissance_marie" class="form-control" value="{{$Demande->date_naissance_marie}}">
      </div><br>

      <div>
        <label for="date_naissance_mariee">Date de naissance de la mariée :</label><br>
        <input type="date" id="date_naissance_mariee" name="date_naissance_mariee" class="form-control"  value="{{$Demande->date_naissance_mariee}}">
      </div><br>

      <div>
        <label for="regime_matrimonial">Régime matrimonial :</label><br>
        <input type="text" id="regime_matrimonial" name="regime_matrimonial" class="form-control" value="{{$Demande->regime_matrimonial}}" >
      </div><br>

      <div>
        <label for="polygamie_monogamie">Polygamie ou monogamie :</label><br>
        <select id="polygamie_monogamie" name="polygamie_monogamie" >
            <option value="{{$Demande->polygamie_monogamie}}">{{$Demande->polygamie_monogamie}}</option>
          <option value="monogamie">Monogamie</option>
          <option value="polygamie">Polygamie</option>
        </select>
      </div><br>
      <input type="hidden" id="regime_matrimonial" name="id" value="{{$Demande->id}}" >

      <input type="submit" value="Soumettre" class="form-control">
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

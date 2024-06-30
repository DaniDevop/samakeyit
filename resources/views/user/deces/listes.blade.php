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
                            <a href="{{route('actes_deces.users')}}"><button>+Ajouter</button></a>
                            <div class="add-product">
                            </div>
                            <table>
                            <tr>
                                        <th scope="col">Numéro-registre</th>
                                        <th scope="col">Nom père</th>
                                        <th scope="col">Nom mère</th>
                                        <th scope="col">Date du décès</th>
                                        <th scope="col">Lieu du décès</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Details</th>
                                        </tr>
                                <tbody>
                                @foreach($DemandeDecesModel as $DecesModel)
        @if($DecesModel->status == 'En-cours')
        <tr>
          <th scope="row">{{ $DecesModel->numero_registre }}</th>
          <td>{{ $DecesModel->nom_pere }}</td>
          <td>{{ $DecesModel->nom_mere }}</td>
          <td>{{ $DecesModel->date_deces }}</td>
          <td>{{ $DecesModel->lieu_deces }}</td>
          <td>{{ $DecesModel->status }}</td>
          <td>
            <a href="{{ route('details.Deces', ['id' => $DecesModel->id]) }}" class="btn btn-info">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        @endif
        @endforeach
                                                            </tbody>

                            </table>
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

<!doctype html>
<html class="no-js" lang="en">

@include('admins.pages.head')
<style>
    /* Style de la modale */
.modal {
  display: none; /* Caché par défaut */
  position: fixed; /* Positionné de manière fixe */
  z-index: 1; /* Au-dessus de tout le reste */
  left: 0;
  top: 0;
  width: 100%; /* Largeur complète */
  height: 100%; /* Hauteur complète */
  overflow: auto; /* Défilement automatique */
  background-color: rgb(0,0,0); /* Fond noir */
  background-color: rgba(0,0,0,0.4); /* Avec une opacité de 0.4 */
  display: none; /* Assurez-vous que la modale est masquée par défaut */
  justify-content: center; /* Centrage horizontal */
  align-items: center; /* Centrage vertical */
}

/* Style du contenu de la modale */
.modal-content {
  background-color: white;
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Largeur de 80% */
  max-width: 600px; /* Limite la largeur maximale */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optionnel: ajout d'une ombre pour un effet visuel */
}

/* Style de la croix de fermeture */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
                            <h4>Details Mariage</h4>
                            <div class="add-product">
                            </div>
                            <table>
                                <tr>
                                <th>Centre</th>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Regime</th>
                                <th>Status</th>
                                <th>Details</th>


                                <tr>
                                    <th>{{$Demande->numero_registre_mariage}}</th>
                                    <td colspan="2">{{$Demande->centre}}</td>
                                    <td>{{$Demande->date_mariage}}</td>
                                    <td>{{$Demande->regime_matrimonial}}</td>
                                    <td>{{$Demande->status}}</td>
                                    <td><a href="#" id="myBtn" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
                                </tr>


                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">

                                <div id="myModal" class="modal">
  <!-- Contenu de la modale -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="post" enctype="multipart/form-data" action="{{route('envoie.File.ToMail')}}">
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <select name="document_id" id="" class="form-select">
      @foreach( $demandeAll as $demande)
      @if($demande->numer_registre == $Models->numero_registe)
        <option value="{{$demande->id}}"> Titre : {{$demande->numer_registre}}
          <span><a href="{{ Storage::url($demande->document) }}" target="_blank">Apperu</a></span>
          @endif
        </option>
      @endforeach
    </select>
  </div>

  <input type="hidden" name="id" value="{{ $Models->id  }}">
  <input type="hidden" name="users_id" value="{{ $Models->demandeur_id}}">

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>
  </div>
</div>
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

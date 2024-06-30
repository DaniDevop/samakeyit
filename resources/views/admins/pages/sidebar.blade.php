<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('home.admin')}}"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="{{asset('storage/'.Auth::user()->profile)}}" alt="" /></a>
					<h2> {{Auth::user()->name}} </h2>
				</div>
				
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">

                    <li class="active">
                            <a class="has-arrow" href="{{route('home.admin')}}">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Acceuil</span>
								</a>


                        <li></li>
                        <li class="active">
                            <a class="has-arrow" href="{{route('listes.Demande_mariage')}}">
                            <i class="bi bi-person-standing-dress"></i>
								   <span class="mini-click-non">Demandes Mariage</span>
								</a>


                        <li>
                            <a class="has-arrow" href="{{route('listes.Demande_deces')}}" aria-expanded="false"><i class="bi bi-sign-no-parking-fill"></i> <span class="mini-click-non">Listes des décès</span></a>

                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('listesDemande.users.naissance')}}" aria-expanded="false"><i class="bi bi-person-plus"></i> <span class="mini-click-non">Demande de Naissance</span></a>

                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('ajout.document')}}" aria-expanded="false"><i class="bi bi-file-earmark-pdf-fill"></i> <span class="mini-click-non">Ajouter-document</span></a>

                        </li>


                        <li>
                            <a class="has-arrow" href="{{route('listes.users')}}" aria-expanded="false"><i class="bi bi-person-fill-check"></i> <span class="mini-click-non">Utilisateur</span></a>

                        </li>


                        <li>

                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="{{route('update.account.users.page')}}" aria-expanded="false"><i class="bi bi-person-video2"></i> <span class="mini-click-non">Mon compte</span></a>

                        </li>

                        <li id="removable">
                            <a class="has-arrow" href="{{route('logout.authentification')}}" aria-expanded="false"><i class="bi bi-power"></i> <span class="mini-click-non">Deconnection</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

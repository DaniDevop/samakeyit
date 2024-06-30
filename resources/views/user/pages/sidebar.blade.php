<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('home.admin')}}"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="" alt="" /></a>
					<h2>  </h2>
				</div>

			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                      <center> Bienvenu {{session()->get('users')[0]->nom}}</center>
                    <li class="active">
                            <a class="has-arrow" href="">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Acceuil</span>
								</a>


                        <li></li>
                        <li class="active">
                            <a class="has-arrow" href="{{route('liste_mariage.vue')}}">
                            <i class="bi bi-person-standing-dress"></i>
								   <span class="mini-click-non">Demandes Mariage</span>
								</a>


                        <li>
                            <a class="has-arrow" href="{{route('listes.deces')}}" aria-expanded="false"><i class="bi bi-sign-no-parking-fill"></i> <span class="mini-click-non">Demandes décès</span></a>

                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="bi bi-person-plus"></i> <span class="mini-click-non">Demande de Naissance</span></a>

                        </li>






                        <li>

                        </li>


                        <li id="removable">
                            <a class="has-arrow" href="{{route('deconnection.users')}}" aria-expanded="false"><i class="bi bi-power"></i> <span class="mini-click-non">Deconnection</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

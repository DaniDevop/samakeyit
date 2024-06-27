<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Admin.pages.styles')

</head>
<body>

    <main>
    <div class="cards">
        <div class="card-single">
            <div>
                <h2>Acte de naissance {{$demandeNaissance}} </h2>
                <small></small>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h2>Acte de décés {{$demandeDeces}} </h2>
                <small></small>
            </div>
        </div>


        <div class="card-single">
            <div>
                <h2>Acte de mariage  {{$demandeMariage}}</h2>
                <small></small>
            </div>
        </div>
    </div>
        <div class="composant">
        <div class="ventes">
            <div class="case">
                <div class="header-case">
                <a href="{{route('home.admin')}}" class="btn btn-info"><span class="fa fa-home"></span><span>Accueil</span></a>
                <h2>Listes des agents</h2>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Ajouter-un-utilisateur</button>
                <div class="body-case">
                    <div class="tableau">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Profile</td>
                                    <td>Matricule</td>
                                    <td>Nom</td>
                                    <td>Prenom</td>
                                    <td>Email</td>
                                    <td>Tel</td>

                                </tr>
                            </thead>
                            <tbody>
                               @foreach($userAll as $user)
                                <tr>
                                    <td>  <img src="{{asset('storage/'.$user->profile)}}" alt="" width="30" height="30"> </td>
                                    <td> {{$user->matricule}} </td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->prenom}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->tel}} </td>

                                    <td><span class="status-produit color-one"></span>N°</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="stock">
            <div class="case">
                <div class="header-case">
                    <h2>Agents actifs</h2>
                </div>
                @foreach( $userConnecte as  $user)
                <div class="body-case">
                    <div class="all-users">
                        <div class="infos">
                            <img decoding="async" src="{{asset('storage/'.$user->profile)}}" width="30" height="30">
                            <div>
                                <h4>{{$user->name}}</h4>
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajoute-un-compte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action="{{route('create.users')}}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Profile</label>
    <input type="file" class="form-control" name="profile" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" class="form-control" name="tel" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password_confirm"  id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

</form>
      </div>

    </div>
  </div>
</div>
    </main>


<!-- Modal -->

</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
  <title>Responsive Sidebar Navigation | CodyHouse</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  padding-top: 15px;
}
</style>
<body>
@include('Admin.pages.header')
<!-- .cd-main-header -->
<main class="cd-main-content">
  @include('Admin.pages.navbar')
  <div class="cd-content-wrapper">
    <div class="text-component text-center">
      <h1>Details de demande d acte de naissance</h1>

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <main>

      <div class="cards">
          <div class="card" style="display: inline-block; margin-right: 20px;">
            <div class="container">
              <p><b>Nombres de demande de Mariage : {{$demandeMariage}} </b></p>
            </div>
          </div>

          <div class="card" style="display: inline-block; margin-right: 20px;">
            <div class="container">
            <p><b>Nombres de demande de décès : {{$demandeDeces}} </b></p>

            </div>
          </div>

          <div class="card" style="display: inline-block; margin-right: 20px;">
            <div class="container">
            <p><b>Nombres de demande de Mariage : {{$demandeMariage}} </b></p>

            </div>
          </div>

        <div class="composant">
          <div class="ventes">
            <div class="case">
              <div class="header-case">
                <h2>Listes des agents</h2>
              </div>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Ajouter-un-utilisateur
              </button>
              <div class="body-case">
                <div class="tableau">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Profile</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Supprimer</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($userAll as $user)
                        <tr>
                          <td><img src="{{asset('storage/'.$user->profile)}}" alt="" width="30" height="30"></td>
                          <td>{{$user->matricule}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->prenom}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->tel}}</td>
                          <td> <a href="{{route('delete.Users',['id'=>$user->id])}}" class="btn btn-danger"><i class="bi bi-trash3"></i></a> </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          </div>
      </main>


    </div>
  </div>
</main><!-- .cd-main-content -->


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
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

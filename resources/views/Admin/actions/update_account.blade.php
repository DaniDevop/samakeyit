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
    .demande-section {
  margin-bottom: 30px;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.demande-section h4 {
  margin-top: 0;
  margin-bottom: 20px;
  color: #333;
}



</style>
<body>
@include('Admin.pages.header')
<!-- .cd-main-header -->

  <main class="cd-main-content">
    @include('Admin.pages.navbar')
    <div class="cd-content-wrapper">
      <div class="text-component text-center">
        <h1>Mise à jour du compte </h1>

        <div style="padding-top:90px;"></div>
    <div class="container"> <div class="row"> <div class="col-md-12"> <div class="text-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Modifier
              </button>

            <table class="table table-striped table-hover">
              <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                      </tr>
              </thead>
              <tbody>

                        <tr>
                          <td><img src="{{asset('storage/'.Auth::user()->profile)}}" alt="" width="30" height="30"></td>
                          <td>{{Auth::user()->matricule}}</td>
                          <td>{{Auth::user()->name}}</td>
                          <td>{{Auth::user()->prenom}}</td>
                          <td>{{Auth::user()->email}}</td>
                        </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<form method="post"  action="{{route('update.password.admin')}}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="password"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password-confirmation</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="password_confirm"  >
  </div>


  <input type="hidden" class="form-control" name="id" id="exampleInputPassword1" value="{{Auth::user()->id}}">

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

</form>
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
      <form method="post" enctype="multipart/form-data" action="{{route('update.account.users')}}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{Auth::user()->name}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom"  value="{{Auth::user()->prenom}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{Auth::user()->email}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Profile</label>
    <input type="file" class="form-control" name="profile" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" class="form-control" name="tel" id="exampleInputPassword1" value="{{Auth::user()->tel}}">
  </div>

  <input type="hidden" class="form-control" name="id" id="exampleInputPassword1" value="{{Auth::user()->id}}">

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

</form>
      </div>

    </div>
  </div>
</div>
      </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

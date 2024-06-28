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
        <h1>Details de demande d acte de décès</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div style="padding-top:90px;"></div>
    <div class="container"> <div class="row"> <div class="col-md-12"> <div class="text-center">

            <table class="table table-striped table-hover">
            <thead>
    <tr>
    <th scope="col">Numéro-registre</th>
      <th scope="col">Nom-pere</th>
      <th scope="col">Nom de la mère</th>
      <th scope="col">Date-du-décès</th>
      <th scope="col">Lieu-du-décès</th>
      <th scope="col">Status</th>
      <th scope="col">Valider</th>
    </tr>
  </thead>
  <tbody>

    <tr>
    <th > {{$Models->numero_registre}}  </th>

      <th scope="row"> {{$Models->date_naissance}}  </th>
      <td>{{$Models->nom_pere}}</td>
      <td>{{$Models->nom_mere}}</td>
      <td>{{$Models->date_deces}}</td>
      <td>{{$Models->lieu_deces}}</td>
      <td>{{$Models->status}}</td>

      <td> <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-send-plus-fill"></i></a> </td>
      </tr>


  </tbody>
            </table>
          </div>
        </div>
      </div>
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

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Envoyez-un-fichier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action="{{route('envoie.File.ToMailDeces')}}">
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <select name="document_id" id="" class="form-select">
      @foreach( $demandeAll as $demande)
      @if($demande->numer_registre == $Models->numero_registre)
        <option value="{{$demande->id}}"> Titre : {{$demande->numer_registre}}
          <span><a href="{{ Storage::url($demande->document) }}" target="_blank">Apperu</a></span>
          @endif
        </option>
        <a href="{{ Storage::url($demande->document) }}" target="_blank">Apperu</a>

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

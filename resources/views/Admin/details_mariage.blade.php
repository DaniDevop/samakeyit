<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @include('Admin.pages.styles')
</head>
<body>
  <div class="content">
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

      <div class="search-wrapp">
        <span class="fa fa-search"></span>
        <input type="search" name="" placeholder="recherche">
      </div>

      <div id="dropdown" class="user-wrapp">
        <div>
          <h4>agent</h4>
          <small>Admin</small>
        </div>
        <img decoding="async" src="{{asset('storage/'.Auth::user()->profile)}}" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
          <p>Profil</p>
          <a href="{{route('logout.authentification')}}">Déconnexion</a>
          </div>
      </div>
    </header>
    <div style="padding-top:90px;"></div>
    <div class="container"> <div class="row"> <div class="col-md-12"> <div class="text-center"> <h4>Détails Mariage </h4>

    <table class="table">
  <thead>
    <tr>
    <th scope="col">Numéro-registre</th>
      <th scope="col">Centre</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      <th scope="col">Regime</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row"> {{$Demande->numero_registre_mariage}} </th>
      <td colspan="2">{{$Demande->centre}}</td>
      <td>{{$Demande->date_mariage}}</td>
      <td>{{$Demande->regime_matrimonial}}</td>
      <td>{{$Demande->status}}</td>
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
      <form method="post" enctype="multipart/form-data" action="{{route('envoie.File.ToMail.mariage')}}">
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <select name="document_id" id="" class="form-select">
      @foreach( $demandeAll as $demande)
      @if($demande->numer_registre == $Demande->numero_registre_mariage)
        <option value="{{$demande->id}}"> Titre : {{$demande->numer_registre}}
          <span><a href="{{ Storage::url($demande->document) }}" target="_blank">Apperu</a></span>
          @endif
        </option>
        <a href="{{ Storage::url($demande->document) }}" target="_blank">Apperu</a>

      @endforeach
    </select>
  </div>

  <input type="hidden" name="id" value="{{ $Demande->id  }}">
  <input type="hidden" name="users_id" value="{{ $Demande->demandeur_id}}">

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

    </div>
  </div>
</div>
    @include('Admin.pages.sidebar')
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function() {
  const documentPreviewLinks = document.querySelectorAll('.document-preview');
  const documentPreviewIframe = document.getElementById('document-preview-iframe');

  documentPreviewLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default form submission
      documentPreviewIframe.src = this.dataset.documentUrl;
      $('#document-preview-modal').modal('show');
    });
  });
});
</script>
</body>
</html>

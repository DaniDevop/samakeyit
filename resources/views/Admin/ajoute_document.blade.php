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
            <h4>agent  : </br> {{Auth::user()->name}}</h4>
            <small>Admin</small>
            </div>
            <img decoding="async"src="{{asset('storage/'.Auth::user()->profile)}}" width="30" height="30" class="logo-admin">
            <div class="dropdown-content">
                <p>Profil</p>
                <a href="{{route('logout.authentification')}}">Déconnexion</a>
            </div>
        </div>
    </header>
     <center>
     <form method="post" enctype="multipart/form-data" action="{{route('add.Document')}}">
        @csrf

  <fieldset >
    <legend>Ajouter-un-document</legend>
    <div class="mb-2">
      <label for="disabledTextInput" class="form-label">Document  NB : PDF</label>
      <input type="file" name="document" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
      </div>

      <div class="mb-2">
      <label for="disabledTextInput" class="form-label">Numero-registre</label>
      <input type="titre" name="numer_registre" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
      </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select" name="titre">
      <option value="Acte-naissance">Acte-naissance</option>
        <option value="Acte-de-Mariage">Acte-de-Mariage</option>
        <option value="Acte-de-deces" >Acte-de-deces</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
     </center>
   @include('Admin.pages.sidebar')

</body>
</html>

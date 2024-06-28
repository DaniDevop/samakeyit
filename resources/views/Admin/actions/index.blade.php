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
        <h1>Listes des demandes</h1>


        <div class="demande-section">
  <h4>Demande d acte de naissance</h4>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>numéro-registre</th>
        <td>Nom</td>
        <th>nom_pere</th>
        <th>nom_mere</th>
        <th>nannee_de_naissance</th>
        <th>Status</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ModelsDemandeActeNaissance as $Models)
        @if($Models->status =='En-cours')
          <tr>
            <th>{{$Models->numero_registe}}</th>
            <td>{{$Models->nom_pere}}</td>
            <td>{{$Models->nom}}</td>
            <td>{{$Models->nom_mere}}</td>
            <td>{{$Models->annee_de_naissance}}</td>
            <td>{{$Models->status}}</td>
            <td><a href="{{route('details.Actenaissance.users',['id'=>$Models->id])}}" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
  <div>
    {{$ModelsDemandeActeNaissance->links()}}
  </div>
</div>

<div class="demande-section">
  <h4>Demande d acte de mariage</h4>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Numéro-registre</th>
        <th>Centre</th>
        <th>Date</th>
        <th>Lieu</th>
        <th>Regime</th>
        <th>Status</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($DemandeAll as $Demande)
        @if($Demande->status =='En-cours')
          <tr>
            <th>{{$Demande->numero_registre_mariage}}</th>
            <td colspan="2">{{$Demande->centre}}</td>
            <td>{{$Demande->date_mariage}}</td>
            <td>{{$Demande->regime_matrimonial}}</td>
            <td>{{$Demande->status}}</td>
            <td><a href="{{route('details.Acte.Mariage',['id'=>$Models->id])}}" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
  <div>
    {{$DemandeAll->links()}}
  </div>
</div>

<div class="demande-section">
  <h4>Demande d acte de décès</h4>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Numéro-registre</th>
        <th>Nom-pere</th>
        <th>Nom de la mère</th>
        <th>Date-du-décès</th>
        <th>Lieu-du-décès</th>
        <th>Status</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $DemandeDecesModel as $DecesModel)
        @if($DecesModel->status =='En-cours')
          <tr>
            <th>{{$DecesModel->numero_registre}}</th>
            <th>{{$DecesModel->date_naissance}}</th>
            <td>{{$DecesModel->nom_pere}}</td>
            <td>{{$DecesModel->nom_mere}}</td>
            <td>{{$DecesModel->date_deces}}</td>
            <td>{{$DecesModel->lieu_deces}}</td>
            <td>{{$DecesModel->status}}</td>
            <td><a href="{{route('detailsA.Deces',['id'=>$DecesModel->id])}}" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
  <div>
    {{$DemandeDecesModel->links()}}
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

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
        <h1>Ajout-un-document</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" enctype="multipart/form-data" action="{{route('add.Document')}}">
        @csrf

  <fieldset >
    <div class="mb-2">
      <label for="disabledTextInput" class="form-label">Document  NB : PDF</label>
      <input type="file" name="doc" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
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
      </div>
    </div> <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

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
   @include('Admin.pages.sidebar')

</body>
</html>

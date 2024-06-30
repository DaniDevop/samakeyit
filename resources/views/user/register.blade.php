<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('/home/login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('/home/login/css/style.css')}}">
	</head>

	<body>

    <div class="wrapper" style="background-image: url('/home/login/images/temp.jpg');">
    <div class="inner">
				<form action="{{route('store.users')}}" method="POST">
                    @csrf
                                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color: blue;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
					<h3>Creation de compte</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom</label>
							<input type="text" class="form-control" name="nom" >
						</div>
						<div class="form-wrapper">
							<label for="">Prenom</label>
							<input type="text" class="form-control" name="prenom">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email">
					</div>
                    <div class="form-wrapper">
						<label for="">Tel</label>
                        <input type="tel" id="num_telephone"  class="form-control"name="tel" ><br>

					</div>

                    <div class="form-wrapper">
						<label for="">Numéro de carte d'identité nationale:</label>
                        <input type="text" id="num_telephone" name="num_carte_id"  class="form-control"name="tel" ><br>

					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" class="form-control" name="password_confirm">
					</div>

					<button>Enregistrer</button>
                    <a href="/" style="color:blue;">Acceuil</a>
				</form>

			</div>
		</div>

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

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
				<form action="{{route('login.Users.doLogin')}}" method="POST">


					<h3 style="color:blue;">Page de connexion</h3>
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
					<div class="form-group">
						<div class="form-wrapper">
							<label for=""></label>
							<input type="hidden" class="form-control">
						</div>
						<div class="form-wrapper">
						</div>
					</div>
					<div class="form-wrapper">
					</div>
					<div class="form-wrapper">
						<label for="">Identifiant</label>
						<input type="text" name="emailOrTel" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Mot-de-passe</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="checkbox">
						<label>
						</label>
					</div>
					<button>Connexion</button>
				</form>
                <span style="color:brown"> <a href="{{route('signup.users')}}">Creer un compte</a> </span>
			</div>
		</div>

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

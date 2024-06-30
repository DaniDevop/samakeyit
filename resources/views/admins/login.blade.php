<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('/admins/login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('/admins/login/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('/admins/login/images/sene.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('admins/login/images/sene.jpg')}}" alt="">
				</div>
				<form action="{{route('login.authentification')}}" method="POST">
                    @csrf
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
					<h3>Page de connexion</h3>
					<div class="form-group">
						<input type="hidden" placeholder="First Name" class="form-control">
						<input type="hidden" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="hidden" placeholder="Username" name="emailOrTel" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Identifiant" name="emailOrTel" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>

					<button>Valider
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    <a href="{{route('admin.Password.Reset')}}">Reset-Password</a>
				</form>
			</div>
		</div>

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

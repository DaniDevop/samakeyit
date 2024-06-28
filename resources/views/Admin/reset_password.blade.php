<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: #f4f4f4;
}

.login-container {
  width: 400px;
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.login-form {
  margin-bottom: 20px;
}

.login-form h1 {
  color: #333;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #292929;
}

.forgot-password {
  display: block;
  margin-top: 10px;
  color: #999;
}

.register-link {
  display: block;
  margin-top: 10px;
  color: #999;
}


  </style>
</head>
<body>

  <div class="login-container">
    <div class="login-form">
      <h1>Renitialiser </h1>

      <form action="{{route('update.password.reset.admin')}}" method="post">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @csrf
        <div class="form-group">
          <label for="email">Identifiant</label>
          <input type="text" id="email" name="emailOrTel" placeholder="Identifiant" >
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" >
        </div>

        <div class="form-group">
          <label for="password">Password-confirmation</label>
          <input type="password" id="password" name="password_confirm"  >
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>

      </form>

    </div>

    <div class="login-image">
    </div>
  </div>

</body>
</html>

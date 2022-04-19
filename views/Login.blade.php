<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>

<!-- Custom CSS -->

<style>
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>


<body class="main-bg">

<!-- Navbar -->
@extends('Navbar')
<!-- End Navbar -->

<br>

 <!-- Custom styles for this template -->
 <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<h1 class="h3 mb-3 mt-5 fw-normal d-block text-center">Login</h1> 
<main class="form-signin">
  <form action="/Login" method="post">
  @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <small class="d-block text-center mt-3">Not Registered? <a href="/Register">Register Here!</small>
  </form>
</main>

  </body>
</html>

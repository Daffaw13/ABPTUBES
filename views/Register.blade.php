<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
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


 <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <h1 class="h3 mb-3 mt-5 fw-normal d-block text-center">Register</h1>

<main class="form-signin">
  <form method="post" action="/Register">
    @csrf
    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name">
      <label for="name">name</label>
    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <small class="d-block text-center mt-3">Already Registered? <a href="Login">Login Here!</small>
  </form>
</main>


    
  </body>
</html>

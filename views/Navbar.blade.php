<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Wise</title>
  </head>

  <body>

 <!-- NAVBAR -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <nav class="container">
    <a class="navbar-brand" href="/">Wise</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/About">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Wisata">List wisata</a>
        </li>
        </ul>
        </nav>
        <ul class="navbar-nav ms auto">
        @Auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/Order">Pesan Tiket</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/Logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="dropdown-item">Logout</i>
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a href="/Login" class="nav-link">
            <button type="button" class="btn btn-primary mr-3">Login</button></a>
          </li>
          @endauth
        <ul>
        </li>
        </li>
    </div>
    </div>
</nav>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- End Navbar -->
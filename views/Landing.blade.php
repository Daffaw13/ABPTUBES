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

<!-- Navbar -->
@extends('Navbar')
<!-- End Navbar -->

<!-- TOP TEXT -->
  <div class="bg-light p-5 rounded-lg m-3">
  <div class="container text-center">
  <h1 class="display-4">WISE</h1>
  <hr>
  <h1 class="display-4">WELCOME</h1>
  <br>
</div>
</div>
<!-- END TOP TEXT -->

<!-- Carousel -->

<div id="carouselExampleCaptions" class="carousel slide col-lg-6 offset-lg-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/benteng.jpg" width="100px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Museum Benteng Vredeburg</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/kereta.jpg" width="100px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Museum Kereta Keraton</h5>
        <p>.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/perjuangan.jpg" width="100px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Museum Perjuangan Yogyakarta</h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- End Carousel -->

<br>

<!-- Poster 1 -->

<div class="row">
    <div col>
    <div class="container text-center">
      <div class="card" width=100 >
        <a href='Kereta' class="text-decoration-none">
        <h2>Museum Kereta Yogyakarta</h2></a>
        <center>
        <a href='Kereta'>
        <img src="img/kereta.jpg" width="500px"></a>
        </center>
          <div class="card-body">
        <p class="card-text">Museum ini memiliki berbagai kereta kuda yang umurnya mencapai ratusan tahun. Adapula kereta Mondro Juwolo, kereta kuda yang pernah dipakai oleh Pangeran Diponegoro. dari 23 koleksi kereta kuda, 18 kereta masih dipergunakan untuk kepentingan upacara-upacara kebesaran kraton, sedangkan 5 kereta lainnya sudah tidak dipergunakan mengingat kondisi dan usia kereta yang sudah tua. Kereta Kanjeng Nyai Jimad adalah kereta yang paling tua dengan angka tahun pembuatan 1750.</p>
        </div>
     </div>
   </div>
  </div>
</div>
<br>

<!--  End Poster 1 -->

<!-- Poster 2 -->

<div class="row">
    <div col>
    <div class="container text-center">
      <div class="card" width=100 >
        <a href='Perjuangan'  class="text-decoration-none">
        <h2>Museum Perjuangan Yogyakarta</h2></a>
        <center>
        <a href='Perjuangan'>
        <img src="img/perjuangan.jpg" width="500px"></a>
        </center>
          <div class="card-body">
        <p class="card-text">Museum Perjuangan Yogyakarta adalah salah satu penanda sejarah pentingnya Hari Kebangkitan Nasional yang diprakarsai oleh Dr. Sutomo pada tanggal 20 Mei 1908. Pada tanggal tersebut lahir sebuah pergerakan Budi Utomo yang didirikan beliau bersama dengan para mahasiswa STOVIA Jakarta yang dijadikan sebagai Hari Kebangkitan Nasional</p>
        </div>
     </div>
   </div>
  </div>
</div>

<!--  End Poster 2 -->

  </body>
</html>

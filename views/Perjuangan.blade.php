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

 <!-- Navbar -->
@extends('Navbar')
<!-- End Navbar -->

<!-- Judul Destinasi -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="bg-light p-5 rounded-lg m-3">
  <div class="container text-center">
  <h1 class="display-4">Museum Perjuangan Yogyakarta</h1>
  <img src="img/perjuangan.jpg" width=300px>
</div>
</div>

<!-- End judul Destinasi -->

<!-- Body -->

<!-- Grid -->

<div class="container">
  <div class="row">
    <div class="col">
      <h3>Lokasi</h3>
      <p>Jl. Rotowijayan Yogyakarta<p>
      <h3>Jam Operasional</h3>
      <p>Weekday : 09:00 - 16:00</p>
      <p>Weekend : 08:00 - 17:00</p>

      <h3>Harga Tiket</h3>
      <p>Rp.10.000</p> 
    </div>

    <div class="col">
      <h2>Deskripsi</h2>
      <p>Museum Perjuangan Yogyakarta adalah salah satu penanda sejarah pentingnya Hari Kebangkitan Nasional yang diprakarsai oleh Dr. Sutomo pada tanggal 20 Mei 1908. Pada tanggal tersebut lahir sebuah pergerakan Budi Utomo yang didirikan beliau bersama dengan para mahasiswa STOVIA Jakarta yang dijadikan sebagai Hari Kebangkitan Nasional</p>
</p>
    </div>
  </div>

  <br>
  <hr>
  <center>
        <a href='Order'>
        <button type="button" class="btn btn-primary">Pesan Tiket</button></a>
    </center>
</div>
<br>
<br>
<br>
<br>


<!-- End Body -->

</body>
</html>
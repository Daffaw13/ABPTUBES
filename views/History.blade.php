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
<br>

<table class="table table-bordered mt-5">
                        <tr class="success"><th colspan="6">History Order</th></tr>
                        <tr>
                         <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th><th>Tanggal</th><th>Subtotal</th></tr>
                        <?php $no=1; $total=0; ?>

                        <tr>
                                <td>1</td>
                                <td>nama</td>
                                <td>qty</td>
                                <td>harga</td>
                                <td>tanggal</td>
                                <td>tot harga</td>
                               <?php $no++ ?>


                                <tr><td colspan="5"><p align="right">Total</p></td><td>total seluruh</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
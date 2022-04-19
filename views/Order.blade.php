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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">TRANSAKSI TIKET</div>
                    <div class="card-body">
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">
                          {!! Form::open(['route'=>'Order.store','method'=>'POST']) !!}
                          <tr><td>
                                <div class="col-md-12">
                                {!! Form::select('id_tiket',\App\Tiket::pluck('nama_wisata','id'),null,['class'=>'form-control'])  !!}
                                </div>
                           </td></tr>
                        <tr><td>
                                <div class="col-md-12">
                                {!! Form::number('qty','null',['class'=>'form-control']) !!}
                                </div>
                         </td></tr>
                         <tr><td>
                         <div class="form-group col-md-8">
                             <label>Date</label>
                                <input class="form-control" input type="date" name="date" value="2022-01-01" id="date" placeholder="date">
                           </div>
                         <tr><td>
                          <tr><td>
                                <button type="submit" name="submit" class="btn btn-primary">Beli</button>
                                 <a href="/update" class="btn btn-success">Bayar</a>
                            </td></tr>
                    </table>
                    {!! Form::close() !!}
                    <table class="table table-bordered">
                        <tr class="success"><th colspan="6">Detail Order</th></tr>
                        <tr>
                         <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th><th>Tanggal</th><th>Subtotal</th></tr>
                        <?php $no=1; $total=0; ?>
                         @foreach ($Order as $item)
                        <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->tiket->nama_wisata }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->tiket->harga }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->tiket->harga*$item->qty }}</td>

                                <!-- {!! Form::open(['route'=>['Order.destroy',$item->id],'method'=>'DELETE']) !!}

                                <td><button type="submit" class="btn btn-danger">Batal</button></td></tr>

                                {!! Form::close() !!} -->

                               <?php $no++ ?>
                                <?php $total=$total+($item->tiket->harga_tiket*$item->qty) ?>
                        <?php $no++; ?>
                       @endforeach
                                <tr><td colspan="5"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@extends('master')
@section('Title')
    <title>
        GadaMaxima - Tambah Kategori
    </title>
@endsection 

@section('layout')

<div class="content">
    <div class="row">
<div class="col-md-8 offset-md-2">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title" style="text-align:center">Tambah Kategori Baru</h5>
      </div>
      <div class="card-body">
        <form>
          
          <div class="row">
            <div class="col-md-12 ">
              <div class="form-group">
                <h6 label>Paket Baru</label>
                <input type="text" class="form-control" placeholder="Paket 5">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Masa Berlangganan</label>
                <input type="text" class="form-control" placeholder="5 Bulan">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Jumlah Client</label>
                <input type="text" class="form-control" placeholder="20">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Biaya Tagihan</label>
                <input type="number" class="form-control" placeholder="10.000.000" maxlength="25">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Deskripsi</label>
                  <textarea class="form-control" placeholder="Penjelasan"></textarea>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Tambahkan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
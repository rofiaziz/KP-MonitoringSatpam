@extends('master')
@section('Title')
    <title>
        GadaMaxima - Tambah Kota
    </title>
@endsection
@section('layout')
<div class="content">
    <div class="row">
<div class="col-md-8 offset-md-2">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title" style="text-align:center">Daftar Kota Baru</h5>
      </div>
      <div class="card-body">
        <form>
          
          <div class="row">
            <div class="col-md-12 ">
              <div class="form-group">
                <h6 label>Provinsi</label>
                <input type="text" class="form-control" placeholder="Provinsi">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Kabupaten</label>
                <input type="text" class="form-control" placeholder="Kabupaten">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Kecamatan</label>
                <input type="number" class="form-control" placeholder="Kecamatan" maxlength="25">
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
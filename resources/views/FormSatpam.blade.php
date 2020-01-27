@extends('master')
@section('Title')
    <title>
        GadaMaxima - Mendaftar Satpam
    </title>
@endsection
@section('layout')
<div class="content">
    <div class="row">
<div class="col-md-8 offset-md-2">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title" style="text-align:center">Daftar Satpam Baru</h5>
      </div>
      <div class="card-body">
        <form>
          
          <div class="row">
            <div class="col-md-12 ">
              <div class="form-group">
                <h6 label>Nama</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>NIK</label>
                <input type="text" class="form-control" placeholder="Nomor Induk Keluarga">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <h6 label>Tempat Tanggal Lahir</label>
                <input type="number" class="form-control" placeholder="Tempat Tanggal Lahir" maxlength="25">
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Alamat</label>
                  <input type="number" class="form-control" placeholder="Alamat Lengkap" maxlength="25">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Jenis Kelamin</label>
                  <input type="number" class="form-control" placeholder="L/P" maxlength="25">
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="form-group">
                  <h6 label>Golongan Darah</label>
                  <input type="text" class="form-control" placeholder="A/B/AB/O">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Agama</label>
                  <input type="text" class="form-control" placeholder="radio ntar">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h6 label>TTL</label>
                  <input type="number" class="form-control" placeholder="Kecamatan" maxlength="25">
                </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                    <h6 label>Tinggi Badan</label>
                    <input type="number" class="form-control" placeholder="Tinggi Badan" maxlength="25">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                    <h6 label>Berat Badan</label>
                    <input type="number" class="form-control" placeholder="Berat Badan" maxlength="25">
                  </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h6 label>Kewarganegaraan</label>
                  <input type="number" class="form-control" placeholder="Kewarganegaraan" maxlength="25">
                </div>
                </div>
          </div>
        <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Daftar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
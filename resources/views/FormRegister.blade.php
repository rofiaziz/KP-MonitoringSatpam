@extends('master')

@section('Title')
    <title>
        GadaMaxima - Daftar Baru
    </title>
@endsection
@section('layout')

<div class="content">
  <div class="row">
    <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Daftar Perusahaan Baru</h5>
          </div>
          <div class="card-body">
            
            {{-- baris form --}}

            <form action="Register/input" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Perusahaan">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Daftarkan Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Sandi">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label>Kota</label>
                    <input type="text" name="kota" class="form-control" placeholder="Kota Perusahaan" maxlength="5">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Perusahaan">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Tentang Perusahaan</label>
                    <input type="text" name="tentang" class="form-control" placeholder="Tentang Perusahaan">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label>Jumlah Client</label>
                    <input type="text" name="client" class="form-control" placeholder="Jumlah CLient">
                  </div>
                </div>
                <div class="col-md-4 px-1">
                  <div class="form-group">
                    <label>Jumlah Satpam</label>
                    <input type="number" name="satpam" placeholder="Jumlah Satpam" class="form-control">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label>Paket/Kategori</label>
                    <select class="form-control" name="paket" id="exampleFormControlSelect1">
                      <option>RP. 10.000.000</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select></div>
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
    </div>
</div>

@endsection
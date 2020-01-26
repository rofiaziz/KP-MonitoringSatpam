@extends('master')

@section('layout')
<div class="content">
    <div class="row">
<div class="col-md-8">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Daftar Perusahaan Baru</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" class="form-control" placeholder="Nama Perusahaan">
              </div>
            </div>
            <div class="col-md-6 pl-1">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" placeholder="Daftarkan Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col pr-1">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Masukan Sandi">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat Perusahaan">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" class="form-control" placeholder="Kecamatan">
              </div>
            </div>
            <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Kabupaten</label>
                <input type="text" class="form-control" placeholder="Kabupaten">
              </div>
            </div>
            <div class="col-md-4 pl-1">
              <div class="form-group">
                <label>Kode Pos</label>
                <input type="number" class="form-control" placeholder="Kode Pos" maxlength="5">
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Jumlah Klien</label>
                    <input type="number" placeholder="Jumlah Klien" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Paket/Kategori</label>
                      <select class="form-control" id="exampleFormControlSelect1">
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
</div>
@endsection
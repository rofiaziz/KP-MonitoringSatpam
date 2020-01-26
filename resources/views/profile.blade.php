@extends('master')
    @section('layout')
        <div class="content">
            <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                <div class="image">
                    <img src="../assets/img/damir-bosnjak.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                        <h5 class="title">Perusahaan Sayur</h5>
                    </a>
                    <p class="description">
                        @Sayur
                    </p>
                    </div>
                    <p class="description text-center">
                    "Hayuk jadi client
                    <br> Murah
                    <br> Mantep pokoknya"
                    </p>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6 ml-auto">
                        <h5>12
                            <br>
                            <small>Client</small>
                        </h5>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                        <h5>100
                            <br>
                            <small>Satpam</small>
                        </h5>
                        </div>
                        <div class="col-lg-3 mr-auto">
                        <h5>Rp.10 Jt
                            <br>
                            <small>Biaya Daftar</small>
                        </h5>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Admin Tim</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                        <div class="col-md-2 col-2">
                            <div class="avatar">
                            <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                        </div>
                        <div class="col-md-7 col-7">
                            DJ Khaled
                            <br />
                            <span class="text-success">
                            <small>Admin</small>
                            </span>
                        </div>
                        <div class="col-md-3 col-3 text-right">
                            <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                        <div class="col-md-2 col-2">
                            <div class="avatar">
                            <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                        </div>
                        <div class="col-md-7 col-7">
                            DJ Marshmallow
                            <br />
                            <span class="text-success">
                            <small>Admin</small>
                            </span>
                        </div>
                        <div class="col-md-3 col-3 text-right">
                            <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                        <div class="col-md-2 col-2">
                            <div class="avatar">
                            <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                        </div>
                        <div class="col-ms-7 col-7">
                            Mamas Ganteng
                            <br />
                            <span class="text-danger">
                            <small>Admimn Operator</small>
                            </span>
                        </div>
                        <div class="col-md-3 col-3 text-right">
                            <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Ubah Profil</h5>
                </div>
                <div class="card-body">
                    <form>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>Perusahaan </label>
                            <input type="text" class="form-control"     placeholder="Company" value="Creative Code Inc.">
                        </div>
                        </div>
                        <!-- <div class="col-md-3 px-1">
                        <div class="form-group">
                            <label>Nama Pengguna</label>
                            <input type="text" class="form-control" placeholder="Username" value="Si Tampan">
                        </div>
                        </div> -->
                        <div class="col-md-6 pl-1">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input type="email" class="form-control" placeholder="Email@gmail.co.id">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Jumlah Client</label>
                            <input type="text" class="form-control" placeholder="Jumlah Client" value="12">
                        </div>
                        </div>
                        <div class="col-md-4 px-1">
                        <div class="form-group">
                            <label>Jumlah Satpam Terkelola</label>
                            <input type="text" class="form-control" placeholder="Jumlah Satpam" value="100">
                        </div>
                        </div>
                        <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label>Biaya </label>
                            <input type="text" class="form-control" placeholder="Biaya" value="10 Jt">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat Perusahaan</label>
                            <input type="text" class="form-control" placeholder="Alamat Perusahaan" value="Jogja,pokoke Jogja">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" class="form-control" placeholder="Kota" value="Jogja">
                        </div>
                        </div>
                        <div class="col-md-4 px-1">
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" placeholder="Provinsi" value="DIY">
                        </div>
                        </div>
                        <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label>Kode Pos</label>
                            <input type="number" class="form-control" placeholder="Kode pos">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Tentang Perusahaan</label>
                            <textarea class="form-control textarea">Perusahaan Sayur mayur </textarea>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary btn-round">Ubah Profil</button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>

    @endsection
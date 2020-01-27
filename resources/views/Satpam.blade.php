@extends('master')

@section('Title')
    <title>
        GadaMaxima - Satpam
    </title>
@endsection
@section('layout')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-8">
                  <h4 class="card-title">Permintaan Daftar Satpam</h4>
              </div>
              <div class="col-md-2 offset-md-1">
                  <a href="/FormRegister" class="btn btn-info">+ Daftar Baru</a>
              </div>
            </div>            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nama Satpam
                  </th>
                  <th>
                    NIK
                  </th>
                  <th>
                    TTL
                  </th>
                  <th>
                    Alamat
                  </th>
                  <th>
                   Jenis Kelamin
                  </th>
                  <th>
                    ACC
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Satpam Gans
                    </td>
                    <td>
                      123123123
                    </td>
                    <td>
                      Jogja, 10 September 1990
                    </td>
                    <td>
                        alamat rumahh si satpam sangat teramat jauh di ujung dunia
                    </td>
                    <td>
                     Laki Laki
                    </td>
                    <td>
                    <button type="button" class="btn btn-success">Verified</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
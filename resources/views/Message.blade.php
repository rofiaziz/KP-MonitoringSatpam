@extends('master')
@section('Title')
    <title>
        GadaMaxima - Pesan
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
                  <h4 class="card-title">Permintaan Daftar Outsourcing</h4>
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
                    Nama Perusahaan
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Client
                  </th>
                  <th>
                    Paket
                  </th>
                  <th>
                    Masa Berlangganan
                  </th>
                  <th>
                   Tagihan
                  </th>
                  <th>
                    ACC
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Satpam Indo
                    </td>
                    <td>
                      Satpamindo221
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      Paket 1
                    </td>
                    <td>
                      12 Bulan
                    </td>
                    <td>
                     RP. 10.000.000
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
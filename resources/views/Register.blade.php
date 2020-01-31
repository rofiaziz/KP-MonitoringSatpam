@extends('master')

@section('Title')
    <title>
        GadaMaxima - Verifikasi Permintaan
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
                  @foreach ($Register as $row)                    
            
                  <tr>
                    <td>
                      {{$row->nama_perusahaan}}
                    </td>
                    <td>
                      {{$row->email_perusahaan}}
                    </td>
                    <td>
                      {{$row->jumlah_client}}
                    </td>
                    <td>
                      {{$row->masa_berlangganan}}
                    </td>
                    <td>
                     {{$row->tagihan}}
                    </td>
                    <td>
                    <button type="button" class="btn btn-success">Verified</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
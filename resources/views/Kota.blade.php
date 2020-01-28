@extends('master')
@section('Title')
    <title>
        GadaMaxima - Daftar Lokasi
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
                                <h4 class="card-title">Daftar Lokasi Tersedia</h4>
                            </div>
                        <div class="col-md-2 offset-md-1">
                            <a href="/FormKota" class="btn btn-info">+ Tambah Lokasi</a>
                        </div>
                    </div>            
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Provinsi
                                </th>
                                <th>
                                    Kabupaten
                                </th>
                                <th>
                                    Kecamatan
                                </th>  
                                <th>
                                    Kelola
                                </th>                          
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                Jawa tengah
                                </td>
                                <td>
                                Kebumen
                                </td>
                                <td>
                                Pejagoan
                                </td>
                                <td>
                                    <a href="/FormRegister" class="btn btn-danger" style="width:75px"><i class="nc-icon nc-basket"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
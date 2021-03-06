@extends('master')
@section('Title')
    <title>
        GadaMaxima - Daftar Kota
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
                                <h4 class="card-title">Daftar Kota Tersedia</h4>
                            </div>
                        <div class="col-md-2 offset-md-1">
                            <a href="/FormKota" class="btn btn-info">+ Daftar Baru</a>
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
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
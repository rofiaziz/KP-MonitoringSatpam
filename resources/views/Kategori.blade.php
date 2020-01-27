@extends('master')
@section('Title')
    <title>
        GadaMaxima - Kategori
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
                                <h4 class="card-title">Daftar Kategori Paket</h4>
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
                                <th style="width:25rem">
                                    Paket
                                </th>
                                                          
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                Paket 1
                                </td>
                            </tr>
                            </tbody>                            
                            <thead class=" text-primary">
                                <th style="width:25rem">
                                    Jumlah Client
                                </th>                         
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    100
                                </td>
                            </tr>
                            </tbody>
                            <thead class=" text-primary">
                                <th style="width:25rem">
                                    Masa Berlangganan
                                </th>                         
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                12 Bulan
                                </td>
                                
                            </tr>
                            </tbody>
                            <thead class=" text-primary">
                                <th style="width:25rem">
                                    Tagihan
                                </th>                         
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Rp. 10.000.000
                                </td>
                                
                            </tr>
                            </tbody>
                            <thead class=" text-primary">
                                <th style="width:25rem">
                                    Deskripsi Paket
                                </th>                         
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Paket ini berisi 100 client
                                </td>
                                
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
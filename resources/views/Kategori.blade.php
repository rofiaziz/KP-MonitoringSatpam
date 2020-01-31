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
                            <a href="/FormKategori" class="btn btn-info">+ Tambah Paket</a>
                        </div>
                    </div>            
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Paket
                                </th>
                                <th>
                                    Jumlah Satpam
                                </th>
                                <th>
                                    Masa Berlangganan
                                </th>  
                                <th>
                                    Tagihan
                                </th>   
                                <th>
                                    Deskripsi paket
                                </th>   
                                <th style="text-align:center">
                                    Kelola
                                </th>                      
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                100
                                </td>
                                <td>
                                12 Bulan
                                </td>
                                <td>
                                10.000.000
                                </td>
                                <td>
                                    <div id="module" class="container">
                                        Deskripsi Paket yang berisi keterangan mengenai biaya serta jumlah satpam yang bisa didapatkan
                                        <p class="collapse" id="collapseExample" aria-expanded="false">
                                            mengenai biaya serta jumlah satpam yang bisa didapatkan</p>
                                            <a role="button" class="collapsed" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></a>
                                    </div>
                                    </td>
                                <td>
                                    <div class="row" style="padding:0; margin:0">
                                        <div class="col-md-6"><a href="/FormRegister" class="btn btn-info"><i class="nc-icon nc-single-copy-04"></i></a></div>
                                        <div class="col-md-6"><a href="/FormRegister" class="btn btn-danger"><i class="nc-icon nc-basket"></i></a></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
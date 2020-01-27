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
                                <th>
                                    Kelola
                                </th>                      
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                Paket 1
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
                                    Deskripsi Paket yang berisi keterangan mengenai biaya serta jumlah satpam yang bisa didapatkan
                                </td>
                                <td>
                                    <a href="/FormRegister" class="btn btn-info">Edit</a>
                                    <a href="/FormRegister" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
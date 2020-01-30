<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        $Register=DB::table('perusahaan')
        ->join('paket','paket.id_paket','=','perusahaan.id_paket')
        ->select('perusahaan.nama_perusahaan','perusahaan.email_perusahaan','perusahaan.jumlah_client','perusahaan.masa_berlangganan','paket.tagihan')
        ->get();
        return view('Register', compact('Register'));
    }


}
?>

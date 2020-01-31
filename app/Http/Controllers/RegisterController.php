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


    public function input(Request $request){
        DB::table('perusahaan')->insert([
            'nama_perusahaan' => $request->nama,
            'email_perusahaan' => $request->email,
            'password' => $request->password,
            'kota' => $request->kota,
            'tentang' => $request->tentang,
            'jumlah_client'=> $request->client,
            'jumlah_satpam'=> $request->satpam,
            'id_paket' => $request->paket

        ]);
        return redirect('/Register');
    }


}
?>

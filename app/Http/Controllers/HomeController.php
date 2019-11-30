<?php

namespace App\Http\Controllers;

use App\form_lomba;
use App\lomba;
use App\support;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function lomba(){
        $lomba = lomba::all();
        return view('lomba',compact('lomba'));
    }
    public function detaillomba($id){
        $lomba = lomba::find($id);
        return view('detaillomba',compact('lomba'));
    }

    public function formpendaftaran($id){
        $lomba = lomba::find($id);
        return view('formpendaftaran',compact('lomba'));
    }

    public function daftarlomba(Request $request){
        $formlomba = form_lomba::create([
            'lomba_id' => $request->idlomba,
            'user_id' => $request->iduser,
            'nama_pendaftar' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'no_hp' => $request->no_hp,
            'nama_instansi' => $request->nama_instansi,
            'alamat_instansi' => $request->alamat_instansi,
            'cabang_olahraga' => $request->cabang,
            'kategori_olahraga' => $request->kategori_olahraga
        ]);

        $formlomba->save();

        return view('home');
    }

    public function contactus(){
        return view('contactus');
    }

    public function addcontactus(Request $request){

        $contactus = support::create([
            'user_id' => $request->userid,
            'kritik_saran' => $request->keterangan

        ]);
        $contactus->save();
        return view('contactus');
    }
}

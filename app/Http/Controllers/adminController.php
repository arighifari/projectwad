<?php

namespace App\Http\Controllers;

use App\lomba;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $time = Carbon::now()->timestamp.'.'.$file->extension();
        $file->storeAs('image',$time);
        $filepath = 'http://localhost:8000/storage/image/'.$time;

        $lomba = lomba::create([
            'nama_lomba' => $request->nama,
            'keterangan' => $request->keterangan,
            'form_berkas' => $request->urllink,
            'gambar' => $filepath,
            'email_panitia' => $request->email
        ]);

        $lomba->save();


        return view('admin.addlomba');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lomba = lomba::where('id',$id)->update([
            'nama_lomba' => $request->nama,
            'keterangan' => $request->keterangan,
            'form_berkas' => $request->urllink,
            'email_panitia' => $request->email
        ]);

        return view('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lomba= lomba::where('id', $id)->first();
        $ambilpath = explode("/",$lomba->gambar);
//        dd($ambilpath[4]."/".$ambilpath[5]);
        Storage::delete($ambilpath[4]."/".$ambilpath[5]);
        lomba::where('id', $id)->delete();
        return view('admin.home');
    }

    public function lomba(){
        return view('admin.addlomba');
    }

    public function formupdate($id){
        $lomba = lomba::find($id);
        return view('admin.updatelomba',compact('lomba'));
    }
}

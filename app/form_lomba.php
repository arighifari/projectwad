<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_lomba extends Model
{
    protected $fillable = [
        'lomba_id', 'user_id', 'nama_pendaftar', 'alamat', 'kota', 'provinsi', 'kode_pos', 'no_hp', 'nama_instansi', 'alamat_instansi', 'cabang_olahraga',
        'berkas_lomba', 'bukti_pendaftaran'
    ];

    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function lomba()
    {
        return $this->belongsTo('App\lomba','lomba_id','id');
    }



}

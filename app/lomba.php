<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lomba extends Model
{
    protected $fillable = [
        'nama_lomba', 'keterangan', 'form_berkas', 'gambar', 'email_panitia'
    ];

    public function lomba(){
        return $this->hasMany('App\form_lomba','lomba_id','id');
    }

}

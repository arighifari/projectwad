<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lomba extends Model
{
    protected $fillable = [
        'nama_lomba', 'keterangan', 'form_berkas', 'email_panitia'
    ];

    public function lomba(){
        return $this->hasOne('App\form_lomba','lomba_id','id');
    }
}

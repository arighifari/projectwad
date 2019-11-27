<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    protected $fillable = [
        'user_id', 'kritik_saran'
    ];

    public function lomba(){
        return $this->belongsTo('App\User','user_id','id');
    }
}

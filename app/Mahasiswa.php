<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='mahasiswas';
    protected $fillable = [
        'NIM',
        'Nama',
        'Alamat',
        'Telepon'
    ];

    public function ujianproposal()
    {
        return $this->belongsTo('App\Ujianproposal');
    
    }
}

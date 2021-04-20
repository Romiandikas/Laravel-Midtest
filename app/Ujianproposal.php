<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujianproposal extends Model
{
    protected $table ='ujianproposal';
    protected $fillable = [
        'id',
        'judulujian',
        'mahasiswa_id',
        'dosen_id',
        'tanggal'
    ];

    public function dosen()
    {
        return $this->hasOne('App\dosen', 'id', 'dosen_id');
    
    }

    public function mahasiswa()
    {
        return $this->hasOne('App\mahasiswa', 'id', 'mahasiswa_id');
    
    } 


}

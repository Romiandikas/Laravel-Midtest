<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['NIP', 'NIDN', 'Nama', 'Email'];
    protected $table = 'Dosen';

    public function ujianproposal()
    {
        return $this->belongsTo('App\Ujianproposal');
    
    }
    
}

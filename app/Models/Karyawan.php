<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function divisi(){
        return $this->belongsTo('App\Models\Divisi', 'divisi_id');
    }
}

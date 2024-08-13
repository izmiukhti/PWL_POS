<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function cekObject(){
        $anggota = new Anggota;
        
        dump($anggota);
    }
}

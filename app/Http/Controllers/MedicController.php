<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RS;
use App\Spesialis;
use App\Dokter;
use App\Pasien;

class MedicController extends Controller
{
    public function getRS()
    {
        $rumah_sakit = RS::all();

        return response()->json($rumah_sakit);
    }

    public function getSpesialis($id)
    {
        $spesialis = Spesialis::where('kode_RS', $id)->get();

        return response()->json($spesialis);
    }

    public function getDokter($id)
    {
        $dokter = Dokter::where('kode_spesialis', $id)->get();

        return response()->json($dokter);
    }

}

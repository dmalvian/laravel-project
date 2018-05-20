<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kota;
use App\Kecamatan;

class AddressController extends Controller
{
    public function getProvinsi() 
    {
        $provinsi = Provinsi::all();

        return response()->json($provinsi);
    }

    public function getKota($id) {
        $kota = Kota::where('province_id', $id)->get();

        return response()->json($kota);
    }

    public function getKecamatan($id) {
        $kecamatan = Kecamatan::where('regency_id', $id)->get();

        return response()->json($kecamatan);
    }
}

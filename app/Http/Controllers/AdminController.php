<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Pasien;
use App\RM;
use App\Spesialis;
use App\Dokter;
use DB;

class AdminController extends Controller
{
    public function createsignIn()
    {
        if(session()->get('rumah_sakit') != null){
            return redirect('admin/dashboard');
        }else{
            return view('admin/admin');
        }
    }

    public function signIn(Request $request)
    {
        $username 	= $request -> username;
        $password 	= $request -> password;
        $users = Admin::whereRaw("username = '$username' && password = '$password'")->first();

        if($username && $password) {
            if(!$users){
                return redirect('/admin')->with('message', 'Gagal login email atau password salah !');
            }else{
                $request->session()->put('rumah_sakit', $users -> rumah_sakit);
                alert()->success('Post Created', 'Successfully');
                return redirect('admin/dashboard');
            }
        }else{
            return redirect('admin')->with('message', 'Anda belum mengisi email dan password dengan benar !');
        }        
    }

    public function dashboard()
    {
        if(session()->get('rumah_sakit') != null){
            $rs = session()->get('rumah_sakit');
            $pasien = DB::table('tbl_rm')
                        ->join('tbl_pasien','tbl_rm.ktp','=','tbl_pasien.no_ktp')
                        ->join('tbl_spesialis','tbl_rm.spesialis','=','tbl_spesialis.kode_spesialis')
                        ->join('tbl_dokter','tbl_rm.dokter','=','tbl_dokter.NIDN')
                        ->select('tbl_rm.*','tbl_pasien.nama_pasien as npasien','tbl_spesialis.nama_spesialis as nspesialis','tbl_dokter.nama_dokter as ndokter')
                        ->where('tbl_rm.rumah_sakit', $rs)
                        ->get();
            return view('admin.dashboard', compact('pasien'));
        }else{
            return redirect('admin')->with('message','Bukan Admin Ya !');
        }
    }

    public function cariData(Request $request)
    {
        $query = $request->get('keyword');
        $pasien = DB::table('tbl_rm')
                        ->join('tbl_pasien','tbl_rm.ktp','=','tbl_pasien.no_ktp')
                        ->join('tbl_spesialis','tbl_rm.spesialis','=','tbl_spesialis.kode_spesialis')
                        ->join('tbl_dokter','tbl_rm.dokter','=','tbl_dokter.NIDN')
                        ->select('tbl_rm.*','tbl_pasien.nama_pasien as npasien','tbl_spesialis.nama_spesialis as nspesialis','tbl_dokter.nama_dokter as ndokter')
                        ->where('tbl_dokter.nama_dokter', 'like','%' .$query.'%')
                        ->orwhere('tbl_pasien.nama_pasien','like','%'.$query.'%')
                        ->get();

        return view('admin.dashboard',compact('pasien'));
    }

    public function pasien()
    {
        $rs = session()->get('rumah_sakit');
        $pasien = DB::table('tbl_periksa')
                    ->join('tbl_pasien','tbl_periksa.no_ktp','=','tbl_pasien.no_ktp')
                    ->select('tbl_pasien.no_ktp','tbl_pasien.nama_pasien','tbl_periksa.*')
                    ->where('tbl_periksa.rumah_sakit','=',$rs)
                    ->get();
        return response()->json($pasien);
    }

    public function spesialis()
    {
        $rs = session()->get('rumah_sakit');
        $spesialis = Spesialis::where('kode_RS', $rs)->get();
        return response()->json($spesialis);
    }

    public function dokter($id)
    {
        $dokter = Dokter::where('kode_spesialis',$id)->get();
        return response()->json($dokter);
    }

    public function logout()
    {
        session()->flush();
        return redirect('admin');
    }

    public function createAdd()
    {
        if(session()->get('rumah_sakit') != null){
            return view('admin.create');
        }else{
            return redirect('admin')->with('message','Bukan Admin Ya !');
        }
    }

    public function storeData(Request $request)
    {
        $validate = RM::whereRaw("ktp = '$request->no_ktp'")->first();
        if($validate)
        {
            return redirect('/pasien/add')->with('message','Pasien Sudah Terdaftar');
        }else{
            $pasien = new RM();
            $pasien -> tgl_rm = $request -> tgl_rm ;
            $pasien -> ktp = $request -> no_ktp  ;
            $pasien -> rumah_sakit = session()->get('rumah_sakit');
            $pasien -> spesialis = $request -> kd_spesialis ;
            $pasien -> dokter = $request -> nidn ;
            $pasien -> keluhan = $request -> keluhan ;
            $pasien -> pemeriksaan = $request -> pemeriksaan ;
            $pasien -> diagnosa = $request -> diagnosa ;
            $pasien -> resep = $request -> resep ;

            $pasien->save();

            return redirect('admin/dashboard');
        }
    }
}

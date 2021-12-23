<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class NilaiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexPerSiswa($id_siswa,$id_kelas,$id_tahun)
    {
        $siswa = DB::table('bd_siswa')->where('id_siswa',$id_siswa)->first();
        $data = DB::table('bd_nilai_siswa as bns')
        ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
        ->join('md_kelas as mk','mk.id_kelas','=','bns.id_kelas')
        ->where('bns.id_siswa',$id_siswa)
        ->where('bns.id_kelas',$id_kelas)
        ->where('bns.id_tahun',$id_tahun)
        ->get();
        $kelas = DB::table('md_kelas')->where('id_kelas',$id_kelas)->first();
        $tahun = DB::table('md_tahun_ajaran')->where('id_tahun',$id_tahun)->first();
        return view('guru.DataNilai.SelectPersiswa',compact('data','siswa','kelas','tahun'));
    }

    public function PerSiswaMapel($id_siswa,$id_kelas,$id_mapel,$id_tahun)
    {
        $siswa = DB::table('bd_siswa')->where('id_siswa',$id_siswa)->first();
        $data = DB::table('bd_nilai_siswa as bns')
        ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
        ->join('md_kelas as mk','mk.id_kelas','=','bns.id_kelas')
        ->where('bns.id_siswa',$id_siswa)
        ->where('bns.id_kelas',$id_kelas)
        ->where('bns.id_tahun',$id_tahun)
        ->where('bns.id_matapelajaran',$id_mapel) 
        ->get();
        return view('guru.DataNilai.SelectPerMapel',compact('data','siswa'));
    }

    public function indexRangkumanNilai($id_siswa,$id_kelas,$id_tahun)
    {
        $siswa = DB::table('bd_siswa')->where('id_siswa',$id_siswa)->first();
        $grup = DB::table('bd_nilai_siswa as bns')
        ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
        ->join('md_kelas as mk','mk.id_kelas','=','bns.id_kelas')
         ->where('bns.id_siswa',$id_siswa)
        ->where('bns.id_kelas',$id_kelas)
        ->where('bns.id_tahun',$id_tahun)
        ->groupBy('bns.id_matapelajaran') 
        ->get();
        $arr = [];
        foreach($grup as $key => $it)
        {
            $banyak = DB::table('bd_nilai_siswa as bns')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
                ->join('md_kelas as mk','mk.id_kelas','=','bns.id_kelas')
                ->where('bns.id_siswa',$id_siswa)
                ->where('bns.id_kelas',$id_kelas)
                ->where('bns.id_matapelajaran',$it->id_matapelajaran) 
                ->count();
            $jumlah = DB::table('bd_nilai_siswa as bns')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
                ->join('md_kelas as mk','mk.id_kelas','=','bns.id_kelas')
                ->where('bns.id_siswa',$id_siswa)
                ->where('bns.id_kelas',$id_kelas)
                ->where('bns.id_matapelajaran',$it->id_matapelajaran) 
                ->sum('nilai');
            $nilai = $jumlah / $banyak;
            $hasil = round($nilai,0);
            $arr[$key]['nama_matapelajaran'] = $it->nama_matapelajaran;
            if($hasil <= 75){
                $arr[$key]['status'] = 'Cukup';
            }elseif($hasil < 75){
                $arr[$key]['status'] = 'Tidak Cukup';
            }elseif($hasil > 85){
                $arr[$key]['status'] = 'Baik';
            }elseif($hasil < 90){
                $arr[$key]['status'] = 'Sangat Baik';
            }
            
            $arr[$key]['rata_rata'] = $hasil;

        }
        $kelas = DB::table('md_kelas')->where('id_kelas',$id_kelas)->first();
        $tahun = DB::table('md_tahun_ajaran')->where('id_tahun',$id_tahun)->first();
        $siswa = DB::table('bd_siswa')->where('id_siswa',$id_siswa)->first();
        return view('guru.DataNilai.RangkumanNilai',compact('arr','siswa','kelas','tahun'));
    }

    public function indexPilihKelas($id_tahun=NULL)
    {
        $tahun = DB::table('md_tahun_ajaran')->get();
        $guru = DB::table('md_guru')->where('id_user',Auth::user()->id)->first();
        $data = [];
        $arr = [];
        if($id_tahun!=NULL){
            $data = DB::table('md_kelas as mks')
                    ->get();
            foreach($data as $key => $it)
            {
                if($guru){
                    $cek = DB::table('bd_guru_mengajar')
                      ->where('id_kelas',$it->id_kelas)
                      ->where('id_guru',$guru->id_guru)
                      ->first();
                }
                if(Auth::user()->role!='admin'){
                    if($cek){
                        $arr[$key]['ket'] = 'yes';
                            }else{
                        $arr[$key]['ket'] = 'no';
                    }
                }else{
                    $arr[$key]['ket'] = 'yes';
                }
                $arr[$key]['id_kelas'] = $it->id_kelas;
                $arr[$key]['nama_kelas'] = $it->nama_kelas;
            }
            //return $arr;
        }
        
        return view('guru.DataNilai.nilai',compact('arr','tahun','id_tahun'));
    }

    public function indexPenilaian($id_kelas,$id_tahun)
    {
        $data = DB::table('bd_siswa as bs')
                ->join('md_kelas_siswa as mks','mks.id_siswa','=','bs.id_siswa')
                ->join('md_kelas as mk','mk.id_kelas','=','mks.id_kelas')
                ->rightjoin('bd_nilai_siswa as bns','bns.id_siswa','=','bs.id_siswa')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
                ->where('mks.id_kelas',$id_kelas)
                ->where('mks.id_tahun',$id_tahun)
                ->where('bns.id_kelas',$id_kelas)
                ->where('bns.id_tahun',$id_tahun)
                ->orderby('bs.nama_siswa','ASC')
                ->get();
        $pilih = DB::table('bd_siswa as bs')
                ->join('md_kelas_siswa as mks','mks.id_siswa','=','bs.id_siswa')
                ->join('md_kelas as mk','mk.id_kelas','=','mks.id_kelas')
                ->rightjoin('bd_nilai_siswa as bns','bns.id_siswa','=','bs.id_siswa')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
                ->where('mks.id_kelas',$id_kelas)
                ->where('mks.id_tahun',$id_tahun)
                ->where('bns.id_kelas',$id_kelas)
                ->where('bns.id_tahun',$id_tahun)
                ->groupBy('bs.id_siswa')
                ->orderby('bs.nama_siswa','ASC')
                ->get();
        $kelas = DB::table('md_kelas')->where('id_kelas',$id_kelas)->first();
        $tahun = DB::table('md_tahun_ajaran')->where('id_tahun',$id_tahun)->first();
        //return $data;
        return view('guru.DataNilai.index',compact('data','kelas','tahun','pilih'));
    }

    public function indexPenilaianCreate($id_siswa,$id_kelas,$id_tahun)
    {
        $data = DB::table('bd_siswa as bs')
                ->where('bs.id_siswa',$id_siswa)
                ->first();
        $mapel = DB::table('md_matapelajaran')->get();
        return view('guru.DataNilai.create',compact('data','id_kelas','id_tahun','mapel'));
    }

    public function indexPenilaianEdit($id,$id_siswa,$id_kelas,$id_tahun)
    {
        $data = DB::table('bd_siswa as bs')
                ->where('bs.id_siswa',$id_siswa)
                ->first();
        $mapel = DB::table('md_matapelajaran')->get();
        $nilai = DB::table('bd_nilai_siswa')->where('id_nilai',$id)->first();
        return view('guru.DataNilai.edit',compact('data','id_kelas','id_tahun','mapel','nilai'));
    }

    public function createNilai(Request $request)
    {
        DB::table('bd_nilai_siswa')->insert(
            [
                'id_kelas'=>$request->id_kelas,
                'id_siswa'=>$request->id_siswa,
                'id_tahun'=>$request->id_tahun,
                'id_matapelajaran'=>$request->id_matapelajaran,
                'nilai'=>$request->nilai,
                'nama_nilai'=>$request->nama_nilai
            ]);
        return redirect('guru/kelas/nilai/kelas'.$request->id_kelas.'/'.$request->id_tahun);
    }

    public function updateNilai(Request $request,$id)
    {
        DB::table('bd_nilai_siswa')->where('id_nilai',$id)->update(
            [
                'id_kelas'=>$request->id_kelas,
                'id_siswa'=>$request->id_siswa,
                'id_tahun'=>$request->id_tahun,
                'id_matapelajaran'=>$request->id_matapelajaran,
                'nilai'=>$request->nilai,
                'nama_nilai'=>$request->nama_nilai
            ]);
        return redirect('guru/nilai/'.$request->id_kelas.'/'.$request->id_tahun);
    }

}
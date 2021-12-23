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
        return view('guru.DataNilai.SelectPerSiswa',compact('data','siswa'));
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
                ->where('bsn.id_siswa',$id_siswa)
                ->where('bns.id_kelas',$id_kelas)
                ->where('id_matapelajaran',$it->id_matapelajaran) 
                ->count();
            $jumlah = DB::table('bd_nilai_siswa as bns')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bns.id_matapelajaran')
                ->join('md_kelas as mk','mk.id_kelas','=','bns.id_kelas')
                ->where('bsn.id_siswa',$id_siswa)
                ->where('bns.id_kelas',$id_kelas)
                ->where('id_matapelajaran',$it->id_matapelajaran) 
                ->sum('nilai');
            $nilai = $jumlah / $banyak;
            $arr[$key]['nama_matapelajaran'] = $it->nama_matapelajaran;
            $arr[$key]['kkm'] = $it->kkm;
            $arr[$key]['rata_rata'] = $nilai;

        }
        return view('guru.DataNilai.RangkumanNilai',compact('arr'));
    }

    public function indexPilihKelas($id_tahun=NULL)
    {
        $tahun = DB::table('md_tahun_ajaran')->get();
        $guru = DB::table('md_guru')->where('id_user',Auth::user()->id)->first();
        $data = [];
        $arr = [];
        if($id_tahun==NULL){
            $data = DB::table('md_kelas_siswa as mks')
                    ->leftjoin('md_kelas as mk','mk.id_kelas','=','mks.id_kelas')
                    ->where('mks.id_tahun',$id_tahun)
                    ->groupBy('id_kelas')
                    ->get();
            foreach($data as $key => $it)
            {
                $cek = DB::table('bd_guru_mengajar')
                      ->where('id_kelas',$it->id_kelas)
                      ->where('id_guru',$guru->id_guru)
                      ->first();
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
        }
        return view('guru.DataNilai.nilai',compact('arr','tahun'));
    }

    public function indexPenilaian($id_kelas,$id_tahun)
    {
        $data = DB::table('bd_siswa as bs')
                ->join('md_kelas_siswa as mks','mks.id_siswa','=','bs.id_siswa')
                ->join('md_kelas as mk','mk.id_kelas','=','mks.id_kelas')
                ->rightjoin('bd_nilai_siswa as bns','bns.id_siswa','=','bs.id_siswa')
                ->where('mks.id_kelas',$id_kelas)
                ->where('mks.id_tahun',$id_tahun)
                ->where('bns.id_kelas',$id_kelas)
                ->where('bsn.id_tahun',$id_tahun)
                ->orderby('bs.nama_siswa','ASC')
                ->get();
        return view('guru.DataNilai.index',compact('data'));
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
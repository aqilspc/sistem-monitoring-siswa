<?php

namespace App\Models;
use DB;
//use Laravel\Sanctum\HasApiTokens;
class Guru
{
	public function getDataMengajar($id_guru){
		$data = DB::table('bd_guru_mengajar as bgm')
                ->join('md_kelas as mk','mk.id_kelas','=','bgm.id_kelas')
                ->join('md_guru as mg','mg.id_guru','=','bgm.id_guru')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bgm.id_matapelajaran')
                ->join('md_tahun_ajaran as mtj','mtj.id_tahun','=','bgm.id_tahun')
                ->where('bgm.id_guru',$id_guru)
                ->get();
        return $data;
	}
}
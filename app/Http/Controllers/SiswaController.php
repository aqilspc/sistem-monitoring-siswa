<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
class SiswaController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id_tahun=NULL)
    {
        $data = [];
        if($id_tahun != NULL)
        {
            $data = DB::table('bd_siswa as bs')
            ->join('users as us','us.id','=','bs.id_user_wali')
            ->join('md_kelas_siswa as mks','mks.id_siswa','=','bs.id_siswa')
            ->join('md_kelas as mk','mk.id_kelas','=','mks.id_kelas')
            ->where('mks.id_tahun',$id_tahun)
            ->get();
        }
        $tahun = DB::table('md_tahun_ajaran')->get();
        return view('admin.DataSiswa.index',compact('data','tahun','id_tahun'));
    }

    public function createPage($id_tahun)
    {
        $kelas = DB::table('md_kelas')->get();
        $tahun = DB::table('md_tahun_ajaran')->where('id_tahun',$id_tahun)->first();
        return view('admin.DataSiswa.create',compact('kelas','tahun','id_tahun'));
    }

    public function editPage($id,$id_tahun)
    {
        $data = DB::table('bd_siswa as bs')
        ->join('users as us','us.id','=','bs.id_user_wali')
        ->where('bs.id_siswa',$id)
        ->first();
        $kelas_now = DB::table('md_kelas_siswa')
        ->where('id_siswa',$data->id_siswa)
        ->where('id_tahun',$id_tahun)
        ->select('id_kelas')
        ->first();
        $kelas = DB::table('md_kelas')->get();
        $tahun = DB::table('md_tahun_ajaran')->get();
        return view('admin.DataSiswa.edit',compact('data','kelas_now','kelas','tahun','id_tahun'));
    }

    public function create(Request $request)
    {
        //Create user for wali
        $nama_wali = str_replace(' ', '_', $request->nama_wali);
        $str = strtoupper(Str::random(5));
        $wali = DB::table('users')->insertGetId(
            [
                'role'=>'wali',
                'name'=>$request->nama_wali,
                'email'=>$nama_wali.'@smss.my.id',
                'password'=>bcrypt($str),
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        $siswa =DB::table('bd_siswa')->insertGetId(
            [
                'nis'=>$request->nis,
                'nama_siswa'=>$request->nama_siswa,
                'no_telepon'=>$request->no_telepon,
                'id_user_wali'=>$wali,
                'kode_unik'=>$str,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        DB::table('md_kelas_siswa')->insert(
            [
                'id_tahun'=>$request->id_tahun,
                'id_kelas'=>$request->id_kelas,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/siswa');
    }

    public function update(Request $request,$id)
    {
        //Create user for wali
        $nama_wali = str_replace(' ', '_', $request->nama_wali);
        $wali = DB::table('users')->where('id',$request->id_user_wali)
        ->update(
            [
                'role'=>'wali',
                'name'=>$request->nama_wali,
                'email'=>$nama_wali.'@smss.my.id',
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        DB::table('bd_siswa')->where('id_siswa',$id)->update(
            [
                'nis'=>$request->nis,
                'nama_siswa'=>$request->nama_siswa,
                'no_telepon'=>$request->no_telepon,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        DB::table('md_kelas_siswa')->where('id_siswa',$id)->where('id_tahun',$request->id_tahun)->update(
            [
                'id_tahun'=>$request->id_tahun,
                'id_kelas'=>$request->id_kelas,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/siswa');
    }


    public function delete($id_user_wali,$id)
    {
        DB::table('users')->where('id',$id_user_wali)->delete();
        DB::table('bd_siswa')->where('id_siswa',$id)->delete();
        return redirect('admin/siswa');
    }
}

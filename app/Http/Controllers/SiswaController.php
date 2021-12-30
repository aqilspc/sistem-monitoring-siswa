<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use PDF;
use SimpleXLSX;
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
        $tahun = DB::table('md_tahun_ajaran')->get();
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
        $siswa=DB::table('bd_siswa')->insertGetId(
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
                'id_siswa'=>$siswa,
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
        DB::table('md_kelas_siswa')->where('id_siswa',$id)
        ->where('id_tahun',$request->old_tahun)
        ->update(
            [
                'id_tahun'=>$request->id_tahun,
                'id_kelas'=>$request->id_kelas,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/siswa');
    }


    public function delete($id)
    {
        $data = DB::table('bd_siswa')->where('id_siswa',$id)->first();
        DB::table('users')->where('id',$data->id_user_wali)->delete();
        DB::table('bd_siswa')->where('id_siswa',$id)->delete();
        return redirect('admin/siswa');
    }

    public function exportPdf($id_tahun){
        $data = DB::table('bd_siswa as bs')
               ->join('users as us','us.id','=','bs.id_user_wali')
               ->join('md_kelas_siswa as mks','mks.id_siswa','=','bs.id_siswa')
               ->join('md_kelas as mk','mk.id_kelas','=','mks.id_kelas')
               ->where('mks.id_tahun',$id_tahun)
               ->get();
        $tahun = DB::table('md_tahun_ajaran')->where('id_tahun',$id_tahun)
        ->select('priode_tahun')->first();
        $p = PDF::loadview('admin.Export.siswa',compact('data','tahun'));
        return $p->download('data_siswa_'.$tahun->priode_tahun.'.pdf');
    }

    public function import(Request $request){
        $result ='';
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

        $extension = explode('.',$name);
        $extension = strtolower(end($extension));

        $key = rand().'_'.time();
        $tmp_file_name = "{$key}.{$extension}";
        $tmp_file_path = "admin/siswa/";
        $file->move($tmp_file_path,$tmp_file_name);
        $result = $tmp_file_name;
        $xlsx =SimpleXLSX::parse(public_path('admin/siswa/'.$result));
        $now = Carbon::now()->toDateTimeString();
        $header_values_siswa = $rows_siswa = []; // siswa
            //loop siswa
            foreach ( $xlsx->rows() as $k => $r )
            {
                if ( $k === 0 ) {
                    $header_values_siswa = $r;
                    continue;
                }
                $rows_siswa[] = array_combine( $header_values_siswa, $r );
            }
            $siswa = $rows_siswa;

            for ($i=0; $i < count($siswa); $i++) 
            { 
                
            }
    }
}

<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class GuruController extends Controller
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

    public function index()
    {
        $data = DB::table('md_guru as mg')
        ->join('users as us','us.id','=','mg.id_user')
        ->get();
        return view('admin.DataGuru.index',compact('data'));
    }

    public function create()
    {
        return view('admin.DataGuru.create');
    }

    public function insert(Request $request)
    {
        $userid = DB::table('users')->insertGetId(
            [
                'role'=>'guru',
                'name'=>$request->nama_guru,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        DB::table('md_guru')->insert([
            'id_user'=>$userid,
            'no_hp'=>$request->no_telepon,
            'nama_guru'=>$request->nama_guru,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        return redirect('admin/guru');
    }

    public function edit($id)
    {
        $data = DB::table('md_guru')->where('id_guru',$id)->first();
        $user = DB::table('users')->where('id',$data->id_user)->first();
        return view('admin.DataGuru.edit',compact('data','user'));
    }

    public function update(Request $request,$id)
    {
        DB::table('md_guru')->where('id_guru',$id)->update(
            [
                 'no_hp'=>$request->no_telepon,
                 'nama_guru'=>$request->nama_guru,
                 'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
        $guru = DB::table('md_guru')->where('id_guru',$id)->first();
        DB::table('users')->where('id',$guru->id_user)->update(
            [
                'name'=>$guru->nama_guru,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);
        return redirect('admin/guru');
    }

    public function delete($id)
    {
        DB::table('md_guru')->where('id_guru',$id)->delete();
        return redirect()->back();
    }

    public function indexMengajar($id_guru)
    {
        $data = DB::table('bd_guru_mengajar as bgm')
                ->join('md_kelas as mk','mk.id_kelas','=','bgm.id_kelas')
                ->join('md_guru as mg','mg.id_guru','=','bgm.id_guru')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bgm.id_matapelajaran')
                ->join('md_tahun_ajaran as mtj','mtj.id_tahun','=','bgm.id_tahun')
                ->where('bgm.id_guru',$id_guru)
                ->get();
        $guru = DB::table('md_guru')->where('id_guru',$id_guru)->first();
        return view('admin.DataGuru.mengajar',compact('guru','data'));
    }

    public function createMengajar($id)
    {
        $kelas = DB::table('md_kelas')->get();
        $mapel = DB::table('md_matapelajaran')->get();
        $guru = DB::table('md_guru')->where('id_guru',$id)->first();
        $tahun = DB::table('md_tahun_ajaran')->get();
        return view('admin.DataGuru.mengajar_create',compact('guru','kelas','mapel','tahun'));
    }

    public function editMengajar($id)
    {
        $kelas = DB::table('md_kelas')->get();
        $mapel = DB::table('md_matapelajaran')->get();
        $tahun = DB::table('md_tahun_ajaran')->get();
        $data = DB::table('bd_guru_mengajar as bgm')
                ->join('md_kelas as mk','mk.id_kelas','=','bgm.id_kelas')
                ->join('md_guru as mg','mg.id_guru','=','bgm.id_guru')
                ->join('md_matapelajaran as mp','mp.id_matapelajaran','=','bgm.id_matapelajaran')
                ->join('md_tahun_ajaran as mtj','mtj.id_tahun','=','bgm.id_tahun')
                ->where('bgm.id_mengajar',$id)
                ->first();
        $guru = DB::table('md_guru')->where('id_guru',$data->id_guru)->first();
        return view('admin.DataGuru.mengajar_edit',compact('data','kelas','mapel','tahun','guru'));
    }

    public function storeMengajar(Request $request)
    {
        $guru = $request->id_guru;
        $kelas = $request->id_kelas;
        $mapel = $request->id_matapelajaran;
        $tahun = $request->id_tahun;
            
                DB::table('bd_guru_mengajar')->insert([
                    'id_tahun'=>$tahun,
                    'id_guru'=>$guru,
                    'id_kelas'=>$kelas,
                    'id_matapelajaran'=>$mapel
                ]);
        return redirect('admin/guru/mengajar/'.$guru);
    }

    public function UpdateMengajar(Request $request)
    {
        $guru = $request->id_guru;
        $kelas = $request->id_kelas;
        $mapel = $request->id_matapelajaran;
        $tahun = $request->id_tahun;
            
                DB::table('bd_guru_mengajar')->where('id_mengajar',$request->id_mengajar)->update([
                    'id_tahun'=>$tahun,
                    'id_guru'=>$guru,
                    'id_kelas'=>$kelas,
                    'id_matapelajaran'=>$mapel
                ]);
        return redirect('admin/guru/mengajar/'.$guru);
    }

    public function exportPdf(){
        $data = DB::table('md_guru as mg')
        ->join('users as us','us.id','=','mg.id_user')
        ->get();
        $date = date('Y-m-d'); 
        $p = PDF::loadview('admin.Export.guru',compact('data'));
        return $p->download('data_guru_export_pada_'.$date.'.pdf');
    }
}
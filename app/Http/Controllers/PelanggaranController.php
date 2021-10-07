<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class PelanggaranController extends Controller
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
    public function index()
    {
        $data = DB::table('bd_pelanggaran_siswa as bps')
        ->join('bd_siswa as bs','bs.id_siswa','=','bps.id_siswa')
        ->get();
        return view('admin.DataPelanggaran.index',compact('data'));
    }

    public function createPage()
    {
        $siswa = DB::table('bd_siswa')->select('nama_siswa','id_siswa','nis')->get();
        return view('admin.DataPelanggaran.create',compact('siswa'));
    }

    public function editPage($id)
    {
        $data = DB::table('bd_pelanggaran_siswa')->where('id_pelanggaran',$id)->first();
        $siswa = DB::table('bd_siswa')->select('nama_siswa','id_siswa','nis')->get();
        return view('admin.DataPelanggaran.edit',compact('data','siswa'));
    }

    public function create(Request $request)
    {
        DB::table('bd_pelanggaran_siswa')->insert(
            [
                'id_siswa'=>$request->id_siswa,
                'pelanggaran'=>$request->pelanggaran,
                'tanggal'=>$request->tanggal,
                'status'=>$request->status,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/pelanggaran');
    }

    public function update(Request $request,$id)
    {
        DB::table('bd_pelanggaran_siswa')->where('id_pelanggaran',$id)->update(
            [
                'id_siswa'=>$request->id_siswa,
                'pelanggaran'=>$request->pelanggaran,
                'tanggal'=>$request->tanggal,
                'status'=>$request->status,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/pelanggaran');
    }


    public function delete($id)
    {
        DB::table('bd_pelanggaran_siswa')->where('id_pelanggaran',$id)->delete();
        return redirect('admin/pelanggaran');
    }
}

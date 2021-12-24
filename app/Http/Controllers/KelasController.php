<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class KelasController extends Controller
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
        $data = DB::table('md_kelas as mk')
                ->get();
        return view('admin.DataKelas.index',compact('data'));
    }

    public function create()
    {
        return view('admin.DataKelas.create');
    }

    public function insert(Request $request)
    {

        DB::table('md_kelas')->insert([
            'nama_kelas'=>$request->nama_kelas,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        return redirect('admin/kelas');
    }

    public function edit($id)
    {
        $data = DB::table('md_kelas')->where('id_kelas',$id)->first();
        return view('admin.DataKelas.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        DB::table('md_kelas')->where('id_kelas',$id)->update(
            [
                 'nama_kelas'=>$request->nama_kelas,
                 'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
        return redirect('admin/kelas');
    }

    public function delete($id)
    {
        DB::table('md_kelas')->where('id_kelas',$id)->delete();
        return redirect()->back();
    }
}
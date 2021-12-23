<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class MataPelajaranController extends Controller
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
        $data = DB::table('md_matapelajaran as mk')->get();
        return view('admin.DataMataPelajaran.index',compact('data'));
    }

    public function create()
    {
        return view('admin.DataMataPelajaran.create');
    }

    public function insert(Request $request)
    {

        DB::table('md_matapelajaran')->insert([
            'nama_matapelajaran'=>$request->nama_matapelajaran,
            'kkm'=>$request->kkm,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        return redirect('admin/matapelajaran');
    }

    public function edit($id)
    {
        $data = DB::table('md_matapelajaran')->where('id_matapelajaran',$id)->first();
        return view('admin.DataMataPelajaran.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        DB::table('md_matapelajaran')->where('id_matapelajaran',$id)->update(
            [
                 'nama_matapelajaran'=>$request->nama_matapelajaran,
                 'kkm'=>$request->kkm,
                 'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
        return redirect('admin/matapelajaran');
    }

    public function delete($id)
    {
        DB::table('md_matapelajaran')->where('id_matapelajaran',$id)->delete();
        return redirect()->back();
    }
}
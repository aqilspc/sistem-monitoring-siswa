<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
class TahunAjaranController extends Controller
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
        $data = DB::table('md_tahun_ajaran')->get();
        return view('admin.TahunAjaran.index',compact('data'));
    }

    public function createPage()
    {
        
        return view('admin.TahunAjaran.create');
    }

    public function editPage($id)
    {
        $data = DB::table('md_tahun_ajaran')->where('id_tahun',$id)->first();
        return view('admin.TahunAjaran.edit',compact('data'));
    }

    public function create(Request $request)
    {

        DB::table('md_tahun_ajaran')->insert(
            [
                'priode_tahun'=>$request->priode_tahun,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/tahun');
    }

    public function update(Request $request,$id)
    {
        //Create user for wali
        DB::table('md_tahun_ajaran')->where('id_tahun',$id)->update(
            [
                'priode_tahun'=>$request->priode_tahun,
                'created_at'=>Carbon::now()->toDateTimeString()
            ]);
        return redirect('admin/tahun');
    }
}

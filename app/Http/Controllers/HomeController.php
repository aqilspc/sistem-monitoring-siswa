<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class HomeController extends Controller
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

     public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "admin/images/kegiatan/";
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = $tmp_file_name;
            // }
        return url('admin/images/kegiatan').'/'.$result;
    }

    public function index()
    {
        $kegiatan = DB::table('md_kegiatan')->count();
        $tagihan = DB::table('bd_tagihan_siswa')->where('status','Belum_Lunas')->sum('jumlah');
        $kehadiran = DB::table('bd_kehadiran_siswa')->count();
        return view('admin.home',compact('kegiatan','tagihan','kehadiran'));
    }

    public function indexWali()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)->first();
        return view('user.page.HomeAfterLogin',compact('siswa'));
    }

    public function indexKebijakan()
    {
        $data = DB::table('md_kebijakan')
        ->get();
        return view('user.page.DataKebijakan',compact('data'));
    }

    public function indexKegiatan()
    {
        $data = DB::table('md_kegiatan')
        ->get();
        return view('user.page.DataKegiatan',compact('data'));
    }

    public function indexDetailKegiatan($id)
    {
        $data = DB::table('md_kegiatan')
        ->where('id_kegiatan',$id)
        ->first();
        return view('user.page.DetailKegiatan',compact('data'));
    }

    public function indexKehadiran()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)
        ->select('id_siswa','nama_siswa')->first();
        $data = DB::table('bd_kehadiran_siswa')
        ->where('id_siswa',$siswa->id_siswa)
        ->get();
        return view('user.page.DataKehadiran',compact('data','siswa'));
    }

    public function indexTagihan()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)
        ->select('id_siswa','nama_siswa')->first();
        $data = DB::table('bd_tagihan_siswa')
        ->where('id_siswa',$siswa->id_siswa)
        ->get();
        return view('user.page.DataTagihan',compact('data','siswa'));
    }

    public function indexPelanggaran()
    {
        $siswa = DB::table('bd_siswa')->where('id_user_wali',Auth::user()->id)
        ->select('id_siswa','nama_siswa')->first();
        $data = DB::table('bd_pelanggaran_siswa')
        ->where('id_siswa',$siswa->id_siswa)
        ->get();
        return view('user.page.DataPelanggaran',compact('data','siswa'));
    }

    public function changePhoto(Request $request)
    {
        if($request->file('foto')!=null)
        {
            $foto = $this->uploadFile($request,'foto');
        }else
        {
            $foto = $request->old_foto;
        }
        if($request->password != NULL || $request->password != null)
        {
            $password = bcrypt($request->password);
        }else
        {
            $password = $request->old_password;
        }
        DB::table('users')->where('id',Auth::user()->id)->update(
            [
                'remember_token'=>$foto,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$password
            ]
        );
        return redirect()->back();
    }
}

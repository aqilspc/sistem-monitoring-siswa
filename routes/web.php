<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
//redirect for user wali another
Route::get('/', function () {
    return redirect('homepage');
});
//redirect for admin
Route::get('/admin', function () {
    return redirect('login');
});

//admin area
Route::get('/home', [HomeController::class, 'index']);
Route::post('/admin/update/profile', [HomeController::class, 'changePhoto']);
//admin siswa
Route::get('/admin/siswa', [SiswaController::class, 'index']);
Route::get('/admin/siswa/create_page', [SiswaController::class, 'createPage']);
Route::get('/admin/siswa/edit/{id}', [SiswaController::class, 'editPage']);
Route::post('/admin/siswa/create', [SiswaController::class, 'create']);
Route::post('/admin/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/admin/siswa/delete/{id}', [SiswaController::class, 'delete']);

//admin tagihan
Route::get('/admin/tagihan', [TagihanController::class, 'index']);
Route::get('/admin/tagihan/create_page', [TagihanController::class, 'createPage']);
Route::get('/admin/tagihan/edit/{id}', [TagihanController::class, 'editPage']);
Route::post('/admin/tagihan/create', [TagihanController::class, 'create']);
Route::post('/admin/tagihan/update/{id}', [TagihanController::class, 'update']);
Route::get('/admin/tagihan/delete/{id}', [TagihanController::class, 'delete']);

//admin kebijakan
Route::get('/admin/kebijakan', [KebijakanController::class, 'index']);
Route::get('/admin/kebijakan/create_page', [KebijakanController::class, 'createPage']);
Route::get('/admin/kebijakan/edit/{id}', [KebijakanController::class, 'editPage']);
Route::post('/admin/kebijakan/create', [KebijakanController::class, 'create']);
Route::post('/admin/kebijakan/update/{id}', [KebijakanController::class, 'update']);
Route::get('/admin/kebijakan/delete/{id}', [KebijakanController::class, 'delete']);

//admin kegiatan
Route::get('/admin/kegiatan', [KegiatanController::class, 'index']);
Route::get('/admin/kegiatan/create_page', [KegiatanController::class, 'createPage']);
Route::get('/admin/kegiatan/edit/{id}', [KegiatanController::class, 'editPage']);
Route::post('/admin/kegiatan/create', [KegiatanController::class, 'create']);
Route::post('/admin/kegiatan/update/{id}', [KegiatanController::class, 'update']);
Route::get('/admin/kegiatan/delete/{id}', [KegiatanController::class, 'delete']);

//admin pelanggaran
Route::get('/admin/pelanggaran', [PelanggaranController::class, 'index']);
Route::get('/admin/pelanggaran/create_page', [PelanggaranController::class, 'createPage']);
Route::get('/admin/pelanggaran/edit/{id}', [PelanggaranController::class, 'editPage']);
Route::post('/admin/pelanggaran/create', [PelanggaranController::class, 'create']);
Route::post('/admin/pelanggaran/update/{id}', [PelanggaranController::class, 'update']);
Route::get('/admin/pelanggaran/delete/{id}', [PelanggaranController::class, 'delete']);

//admin kehadiran
Route::get('/admin/kehadiran', [KehadiranController::class, 'index']);
Route::get('/admin/kehadiran/create_page', [KehadiranController::class, 'createPage']);
Route::get('/admin/kehadiran/edit/{id}', [KehadiranController::class, 'editPage']);
Route::post('/admin/kehadiran/create', [KehadiranController::class, 'create']);
Route::post('/admin/kehadiran/update/{id}', [KehadiranController::class, 'update']);
Route::get('/admin/kehadiran/delete/{id}', [KehadiranController::class, 'delete']);

//admin guru
Route::get('/admin/guru',[GuruController::class,'index']);
Route::get('/admin/guru/create',[GuruController::class,'create']);
Route::post('/admin/guru/insert',[GuruController::class,'insert']);
Route::get('/admin/guru/edit/{id}',[GuruController::class,'edit']);
Route::post('/admin/guru/update/{id}',[GuruController::class,'update']);
Route::get('/admin/guru/delete/{id}',[GuruController::class,'delete']);
Route::get('/admin/guru/mengajar',[GuruController::class,'indexMengajar']);
Route::get('/admin/guru/mengajar/create/{id}',[GuruController::class,'createMengajar']);
Route::get('/admin/guru/mengajar/edit/{id}',[GuruController::class,'editMengajar']);
Route::post('/admin/guru/mengajar/storeUpdate',[GuruController::class,'storeOrUpdateMengajar']);

//admin/kelas
Route::get('/admin/kelas',[KelasController::class,'index']);
Route::get('/admin/kelas/create',[KelasController::class,'create']);
Route::post('/admin/kelas/insert',[KelasController::class,'insert']);
Route::get('/admin/kelas/edit/{id}',[KelasController::class,'edit']);
Route::post('/admin/kelas/update/{id}',[KelasController::class,'update']);
Route::get('/admin/kelas/delete/{id}',[KelasController::class,'delete']);

//admin/matapelajaran
Route::get('/admin/matapelajaran',[MataPelajaranController::class,'index']);
Route::get('/admin/matapelajaran/create',[MataPelajaranController::class,'create']);
Route::post('/admin/matapelajaran/insert',[MataPelajaranController::class,'insert']);
Route::get('/admin/matapelajaran/edit/{id}',[MataPelajaranController::class,'edit']);
Route::post('/admin/matapelajaran/update/{id}',[MataPelajaranController::class,'update']);
Route::get('/admin/matapelajaran/delete/{id}',[MataPelajaranController::class,'delete']);

//guru/nilai
Route::get('/guru/kelas',[NilaiController::class,'indexPilihKelas']);
Route::get('/guru/kelas/{tahun}',[NilaiController::class,'indexPilihKelas']);
Route::get('/guru/nilai/{kelas}/{tahun}',[NilaiController::class,'indexPenilaian']);
Route::get('/guru/nilai/create/{s}/{k}/{t}',[NilaiController::class,'indexPenilaianCreate']);
Route::post('/guru/nilai/insert',[NilaiController::class,'createNilai']);
Route::get('/guru/nilai/edit/{id}/{s}/{k}/{t}',[NilaiController::class,'indexPenilaianEdit']);
Route::post('/guru/nilai/updateNilai/{id}',[NilaiController::class,'update']);
Route::get('/guru/nilai/rerata/siswa/{s}/{k}/{t}',[NilaiController::class,'indexRangkumanNilai']);
Route::get('/guru/nilai/mapel/siswa/{s}/{k}/{m}/{t}',[NilaiController::class,'PerSiswaMapel']);
Route::get('/guru/nilai/siswa/{s}/{k}/{t}',[NilaiController::class,'indexPerSiswa']);

//user wali
Route::post('login_wali',[LoginController::class,'customLoginWali']);
Route::post('login_user',[LoginController::class,'customLoginUser']);
Route::get('/homewali', [HomeController::class, 'indexWali']);
Route::get('/homepage', [WebController::class, 'index']);
Route::get('/walihomepage', [WebController::class, 'loginWali']);

Route::get('info/kebijakan',[HomeController::class, 'indexKebijakan']);
Route::get('info/kegiatan',[HomeController::class, 'indexKegiatan']);
Route::get('info/kegiatan/detail/{id}',[HomeController::class, 'indexDetailKegiatan']);
Route::get('info/kehadiran',[HomeController::class, 'indexKehadiran']);
Route::get('info/pelanggaran',[HomeController::class, 'indexPelanggaran']);
Route::get('info/tagihan',[HomeController::class, 'indexTagihan']);

//coba
Route::get('/cobapenilaian', function () {
    return view('user.page.DataPenilaian');
});
Route::get('/nilai', function () {
    return view('guru.DataNilai.nilai');
});
Route::get('/homeguru', function () {
    return view('guru.home');
});

Route::get('/gurumaster', function () {
    return view('admin.DataGuru.index');
});
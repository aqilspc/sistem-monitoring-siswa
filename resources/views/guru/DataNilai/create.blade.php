@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA NILAI</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Nilai {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('guru/nilai/insert')}}">
                            @csrf
                            <input type="hidden" name="id_tahun" value="{{$tahun->id_tahun}}">
                            <input type="hidden" name="id_kelas" value="{{$kelas->id_kelas}}">
                            <label for="nama_siswa">SISWA</label>

                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="id_siswa" required>
                                                <option value="0">
                                                       Pilih Siswa
                                                </option>
                                                @foreach($siswa as $t)
                                                    <option value="{{$t->id_siswa}}">
                                                        {{$t->nis}} - {{$t->nama_siswa}}
                                                    </option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                            <label for="mapel">MATA PELAJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                     <select class="form-control show-tick" name="id_matapelajaran" required>
                                                <option value="0">
                                                       Pilih Mapel
                                                </option>
                                                @foreach($mapel as $t)
                                                    <option value="{{$t->id_matapelajaran}}">
                                                        {{$t->nama_matapelajaran}}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                            <label for="mapel">TUGAS</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="nama_nilai" class="form-control" placeholder="Mata Pelajaran">
                                </div>
                            </div>
                            <label for="nilai">NILAI</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="nilai" class="form-control" placeholder="Nilai">
                                </div>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary center-block" >SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->
        
    </div>
</section>
@endsection
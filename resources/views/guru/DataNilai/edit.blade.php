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
                            Edit Data Nilai {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('guru/nilai/updateNilai/'.$nilai->id_nilai)}}">
                            @csrf
                            <input type="hidden" name="id_tahun" value="{{$tahun->id_tahun}}">
                            <input type="hidden" name="id_kelas" value="{{$kelas->id_kelas}}">
                            <label for="nama_siswa">SISWA</label>

                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="id_siswa">
                                                <option value="0">
                                                       Pilih Siswa
                                                </option>
                                                @foreach($siswa as $t)
                                                    <option value="{{$t->id_siswa}}"
                                                        {{$t->id_siswa==$nilai->id_siswa?'selected':''}}
                                                        >
                                                        {{$t->nis}} - {{$t->nama_siswa}}
                                                    </option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                            <label for="mapel">MATA PELAJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                     <select class="form-control show-tick" name="id_matapelajaran">
                                                <option value="0">
                                                       Pilih Mapel
                                                </option>
                                                @foreach($mapel as $t)
                                                    <option value="{{$t->id_matapelajaran}}"
                                                        {{$t->id_matapelajaran==$nilai->id_matapelajaran?'selected':''}}>
                                                        {{$t->nama_matapelajaran}}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                            <label for="mapel">TUGAS</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_nilai" class="form-control" placeholder="Mata Pelajaran" value="{{$nilai->nama_nilai}}">
                                </div>
                            </div>
                            <label for="nilai">NILAI</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nilai" class="form-control" placeholder="Nilai"
                                    value="{{$nilai->nilai}}">
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
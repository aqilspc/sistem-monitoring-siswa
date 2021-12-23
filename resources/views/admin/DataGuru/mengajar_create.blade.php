@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA GURU MENGAJAR {{strtoupper($guru->nama_guru)}}</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Guru Mengajar
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/guru/mengajar/storeMengajar')}}">
                            @csrf
                        <input type="hidden" name="id_guru" value="{{$guru->id_guru}}">
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <b>Tahun</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                           <select class="form-control show-tick" name="id_tahun">
                                                <option value="0">
                                                       Pilih Tahun
                                                </option>
                                                @foreach($tahun as $t)
                                                    <option value="{{$t->id_tahun}}">{{$t->priode_tahun}}</option>
                                                @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Kelas</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                           <select class="form-control show-tick" name="id_kelas">
                                                <option value="0">
                                                       Pilih Kelas
                                                </option>
                                                @foreach($kelas as $t)
                                                    <option value="{{$t->id_kelas}}">{{$t->nama_kelas}}</option>
                                                @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Mapel</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                           <select class="form-control show-tick" name="id_matapelajaran">
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
                                </div>
                                
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary .p-r-30 .margin-15 center-block" style="width: 100px"  >SUBMIT</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
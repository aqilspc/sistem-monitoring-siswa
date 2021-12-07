@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA NILAI</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Nilai
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/nilai/update/'.$data->id_nilai)}}">
                            @csrf
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <b>NIS</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="nis" class="form-control time24" value="{{$data->nis}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Nama Siswa</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" value="{{$data->nama_siswa}}" name="nama_siswa">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Mata Pelajaran</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">book</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control datetime" value="{{$data->mapel}}" name="mapel">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Tugas</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">book</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control datetime" value="{{$data->tugas}}" name="tugas">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Tanggal</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control datetime" value="{{$data->tanggal}}" name="tanggal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Nilai</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">assignment</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number" value="{{$data->nilai}}" name="nilai">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary .p-r-30 .margin-15 center-block" style="width: 100px"  >UPDATE</button>
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
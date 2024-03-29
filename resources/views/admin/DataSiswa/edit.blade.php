@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA SISWA</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Siswa
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="{{url('admin/siswa/update/'.$data->id_siswa)}}">
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
                                    <b>Nama</b>
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
                                    <b>No. Telepon</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control datetime" value="{{$data->no_telepon}}" name="no_telepon">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Nama Wali</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">people</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number" value="{{$data->name}}" name="nama_wali">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Kelas</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                             <select class="form-control show-tick" name="id_kelas">
                                                <option value="0">
                                                       Pilih Kelas
                                                </option>
                                                @foreach($kelas as $t)
                                                    <option value="{{$t->id_kelas}}" 
                                                     {{$kelas_now->id_kelas == $t->id_kelas?'selected':''}}>
                                                        {{$t->nama_kelas}}</option>
                                                @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Tahun</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="id_tahun">
                                                <option value="0">
                                                       Pilih Tahun
                                                </option>
                                                @foreach($tahun as $t)
                                                    <option value="{{$t->id_tahun}}" 
                                                        {{$id_tahun == $t->id_tahun?'selected':''}}>
                                                        {{$t->priode_tahun}}
                                                    </option>
                                                @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="old_tahun" value="{{$id_tahun}}">
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
@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA SISWA</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Siswa
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/siswa/create')}}">
                            @csrf
                            
                            <label for="nis">NIS</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nis" class="form-control" placeholder="NIS" required>
                                </div>
                            </div>
                            <label for="nama_siswa">NAMA SISWA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required>
                                </div>
                            </div>
                            <label for="no_telepon">NO TELP.</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon Wali" required>
                                </div>
                            </div>
                            <label for="nama_wali">NAMA WALI</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali" required>
                                </div>
                            </div>
                            <label for="email">KELAS</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <select class="form-control show-tick" name="id_kelas" required>
                                                <option value="0">
                                                       Pilih Kelas
                                                </option>
                                                @foreach($kelas as $t)
                                                    <option value="{{$t->id_kelas}}">
                                                        {{$t->nama_kelas}}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                            <label for="email">TAHUN AJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="id_tahun" required>
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
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
                            Tambah Data Nilai
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/nilai/create')}}">
                            @csrf
                            
                            <label for="nis">NIS</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nis" class="form-control" placeholder="NIS">
                                </div>
                            </div>
                            <label for="nama_siswa">NAMA SISWA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">
                                </div>
                            </div>
                            <label for="mapel">MATA PELAJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="mapel" class="form-control" placeholder="Mata Pelajaran">
                                </div>
                            </div>
                            <label for="nilai">NILAI</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nilai" class="form-control" placeholder="Nilai">
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
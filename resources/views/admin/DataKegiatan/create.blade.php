@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEGIATAN SEKOLAH</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Kegiatan
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data">
                            
                            <label for="nama_kegiatan">NAMA KEGIATAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_kegiatan" class="form-control" placeholder="nama kegiatan">
                                </div>
                            </div>
                            <label for="gambar">GAMBAR</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="nis" class="form-control" placeholder="gambar">
                                </div>
                            </div>
                            <label for="keterangan">KETERANGAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="double" id="nis" class="form-control" placeholder="keterangan">
                                </div>
                            </div>
                            <label for="tanggal">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" id="nis" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                            <div>
                            <button type="button" class="btn btn-primary center-block" >SUBMIT</button>
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
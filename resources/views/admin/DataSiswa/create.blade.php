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
                        <form>
                            
                            <label for="nis">NIS</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nis" class="form-control" placeholder="NIS">
                                </div>
                            </div>
                            <label for="nama_siswa">NAMA SISWA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_siswa" class="form-control" placeholder="Nama Siswa">
                                </div>
                            </div>
                            <label for="no_telepon">NO TELP.</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="no_telepon" class="form-control" placeholder="No Telepon Wali">
                                </div>
                            </div>
                            <label for="nama_wali">NAMA WALI</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_wali" class="form-control" placeholder="Nama Wali">
                                </div>
                            </div>
                            <label for="kode_unik">KODE UNIK</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="kode_unik" class="form-control" placeholder="Kode Unik">
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
@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEHADIRAN SISWA</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Kehadiran
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/kehadiran/create')}}">
                            @csrf
                            
                            <label for="nis">NAMA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nis" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <label for="nama_siswa">TANGGAL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" id="nama_siswa" class="form-control" placeholder="tanggal">
                                </div>
                            </div>
                            
                            <label for="status">STATUS</label>
                            <div class="form-group">
                                <div class="demo-radio-button">
                                    <input name="group1" value= "Hadir" type="radio" id="Hadir" class="with-gap">
                                    <label for="Hadir">Hadir</label>
                                    <input name="group1" value= "Izin" type="radio" id="Izin" class="with-gap">
                                    <label for="Izin">Izin</label>
                                    <input name="group1" name="Sakit"type="radio" id="Sakit" class="with-gap">
                                    <label for="Sakit">Sakit</label>
                                    <input name="group1" name="Alpha" type="radio" id="Alpha" class="with-gap">
                                    <label for="Alpha">Alpha</label>
                                </div>
                            </div>
                            <label for="nama_wali">JAM</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_wali" class="form-control" placeholder="Jam">
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
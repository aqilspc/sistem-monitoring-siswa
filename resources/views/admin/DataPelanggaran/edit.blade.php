@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PELANGGARAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Pelanggaran
                        </h2>
                    </div>
                    <div class="body">
                        <form>
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <b>ID</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">vpn_key</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" value="id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>ID Siswa</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time24" value="ID Siswa">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Pelanggaran</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">assignment</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" value="nama pelanggaran">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Status</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">assignment_turned_in</i>
                                        </span>
                                        <div class="form ">
                                                <input name="group1" value= "Berat" type="radio" id="Berat" class="with-gap radio-col-black " value="checked">
                                                <label for="Berat">Berat</label>
                                                <input name="group1" value= "Izin" type="radio" id="Ringan" class="with-gap radio-col-black">
                                                <label for="Ringan">Ringan</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary .p-r-30 .margin-15 center-block" style="width: 100px"  >EDIT</button>
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
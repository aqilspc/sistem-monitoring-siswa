@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEBIJAKAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Kebijakan
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data">
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
                                    <b>Nama</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time24" value="nama Kebijakan">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Keterangan</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">dvr</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="file" class="form-control time12" value="nama">
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
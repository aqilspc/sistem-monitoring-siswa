@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA MATA PELAJARAN</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Mata Pelajaran
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="#">
                            @csrf
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <b>NAMA</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">book</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="mapel" class="form-control time24" value="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Kelas</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_box</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" value="#" name="kelas">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <b>Guru</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control datetime" value="#" name="guru">
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
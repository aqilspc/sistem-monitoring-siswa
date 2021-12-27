@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA MATA PELAJARAN</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Mata Pelajaran
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/matapelajaran/insert')}}">
                            @csrf
                            <label for="nama_kebijakan">NAMA MATA PELAJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_kegiatan" class="form-control" placeholder="nama mapel" name="nama_matapelajaran" required>
                                </div>
                            </div>
                            <label for="nama_kebijakan">KKM MATA PELAJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_kegiatan" class="form-control" placeholder="kkm mapel" name="kkm" required>
                                </div>
                            </div>
                            <div class="center-block">
                                <button type="reset" class="btn btn-default mr-2">Reset</button>
                                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Submit">
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
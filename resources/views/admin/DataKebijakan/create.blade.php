@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KEBIJAKAN SEKOLAH</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Kebijakan
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data">
                            
                            <label for="nama_kebijakan">NAMA KEBIJAKAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_kegiatan" class="form-control" placeholder="nama kebijakan">
                                </div>
                            </div>
                            <label for="file_kebijakan">FILE KEBIJAKAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="nis" class="form-control" placeholder="file kebijakan">
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
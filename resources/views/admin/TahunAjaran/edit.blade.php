@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA TAHUN AJARAN</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edi Data Tahun Ajaran
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/tahun/update/'.$data->id_tahun)}}">
                            @csrf
                            <label for="nama_kebijakan">PRIODE TAHUN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_kegiatan" class="form-control" placeholder="priode tahun" name="priode_tahun" value="{{$data->priode_tahun}}">
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
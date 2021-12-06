@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PERIODE</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Periode
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="#">
                            @csrf
                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="desc"><strong>Deskripsi</strong></label>
                                  <div><input class="panel-body" style="height: 12px; widht: 250px" type="text" class="form-control" placeholder="Contoh :Des-Nov 2020" id="desc" required name="desc">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="start"><strong> Awal Tahun Keuangan</strong></label>
                                  <div>
                                    <input  class="panel-body" style="height: 12px; widht: 250px" type="date" required class="form-control" id="start" name="start">
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="end"><strong> Akhir Tahun Keuangan</strong></label>
                                  <div>
                                    <input class="panel-body" style="height: 12px; widht: 250px" type="date" required class="form-control" id="end" name="end"></div>
                              </div>
                            </div>
                              <div class="center-block">
                                <button type="reset" class="btn btn-default mr-2">Reset</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
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
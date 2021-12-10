@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PERIODE</h2>
        </div>
        <!-- Masked Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Data Periode
                        </h2>
                    </div>
                    <div class="body">
                        <form enctype="multipart/form-data" method="POST" action="#">
                            @csrf
                            <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="desc"><strong>Deskripsi</strong></label>
                                  <div>
                                      <input class="panel-body" style="height: 12px; widht: 250px" type="text" class="form-control" placeholder="Contoh :Des-Nov 2020" id="desc" required name="desc">
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
                                 <input type="hidden" value="zxyyjjxh_finance2" class="form-control" id="end" name="nama_db">
                              </div>
                            </div>
                            <div class="center-block" style="padding-left: 50%; padding-bottom: 2%">
                                <!-- <button type="reset" class="btn btn-default mr-2">Reset</button> -->
                                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
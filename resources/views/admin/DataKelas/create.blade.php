@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA KELAS</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Kelas
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/kelas/create')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                      <label for="name"><strong>Nama Kelas</strong></label>
                                      <div><input class="panel-body" style="height: 12px; width: 350px" type="text" required class="form-control" id="name" name="name">
                                    </div>
                                  </div>
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
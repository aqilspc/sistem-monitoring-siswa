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
                            Tambah Data Mata Pelajaran
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/guru/create')}}">
                            @csrf
                            
                            <label for="mapel">NAMA MATA PELAJARAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="mapel" class="form-control" placeholder="MAPEL">
                                </div>
                            </div>
                            <label for="kelas">KELAS</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                                </div>
                            </div>
                            <label for="guru">GURU</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="guru" class="form-control" placeholder="Guru">
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
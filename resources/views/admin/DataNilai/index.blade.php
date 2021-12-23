@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA NILAI
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('#')}}" class="btn btn-success waves-effect" type="button">Eksport data</a>
                             <a href="{{url('#')}}" class="btn btn-success waves-effect" type="button">Select siswa</a>
                        </h2>
                    </div>

                    <div class="body">
                        
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Jenis</th>
                                            <th>Nilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $key => $d)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->nis}}</td>
                                            <td>{{$d->nama_siswa}}</td>
                                            <td>{{$d->nama_matapelajaran}}</td>
                                            <td>{{$d->nama_nilai}}</td>
                                            <td>{{$d->nilai}}</td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
</section>
@endsection


@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA MENGAJAR {{strtoupper($guru->nama_guru)}}
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('admin/guru/mengajar/create/'.$guru->id_guru)}}" class="btn btn-success waves-effect" type="button">+ Tambah data mengajar</a>
                            
                        </h2>
                    </div>

                    <div class="body">
                        
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mapel</th>
                                            <th>Nama Kelas</th>
                                            <th>Tahun AJaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $key => $d) 
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->nama_matapelajaran}}</td>
                                            <td>{{$d->nama_kelas}}</td>
                                            <td>{{$d->priode_tahun}}</td>
                                            <td>
                                                 <a href="{{url('admin/guru/mengajar/edit/'.$d->id_mengajar)}}" class="btn btn-success waves-effect" type="button">Edit </a>
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


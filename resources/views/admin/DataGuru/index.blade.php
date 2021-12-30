@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA GURU
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('admin/guru/create')}}" class="btn btn-success waves-effect" type="button">+ Tambah data</a>
                          <!--    <a href="{{url('#')}}" class="btn btn-success waves-effect" type="button">Import data</a> -->
                             <a href="{{url('admin/guru_pdf_export')}}" class="btn btn-success waves-effect" type="button">Eksport data</a>
                        </h2>
                    </div>

                    <div class="body">
                        
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No. Telephone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $key => $d) 
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->nama_guru}}</td>
                                            <td>{{$d->no_hp}}</td>
                                            <td>{{$d->email}}</td>                                        
                                            <td>
                                                <a href="{{url('admin/guru/edit/'.$d->id_guru)}}"><i class="material-icons">create</i> </a>
                                                &nbsp;
                                                <a href="{{url('admin/guru/mengajar/'.$d->id_guru)}}"><i class="material-icons">book</i> </a>
                                                &nbsp;
                                                 <a
                                                 onclick="return confirm('Apakah anda yakin untuk menghapus data?')"
                                                 href="{{url('admin/guru/delete/'.$d->id_guru)}}"><i class="material-icons">delete</i> </a>
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


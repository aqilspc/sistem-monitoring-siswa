@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                Rangkuman Nilai {{strtoupper($siswa->nama_siswa)}}  {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('#')}}" class="btn btn-success waves-effect" type="button">
                               Download Pdf
                             </a>
                        </h2>
                    </div>

                    <div class="body">
                        
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Nilai Rata-rata</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($arr as $key => $d)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d['nama_matapelajaran']}}</td>
                                            <td>{{$d['rata_rata']}}</td>
                                            <td>{{$d['status']}}</td>
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


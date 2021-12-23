@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA NILAI {{strtoupper($siswa->nama_siswa)}}  {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('#')}}" class="btn btn-success waves-effect" type="button">Eksport data nilai {{strtoupper($siswa->nama_siswa)}} kelas {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}</a>
                             <a href="{{url('guru/nilai/rerata/siswa/'.$siswa->id_siswa.'/'.$kelas->id_kelas.'/'.$tahun->id_tahun)}}" class="btn btn-success waves-effect" type="button">Klik disini untuk melihat nilai rata rata {{strtoupper($siswa->nama_siswa)}}</a>
                        </h2>
                        <br>
                        
                    </div>

                    <div class="body">
                        
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $key => $d)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->nama_matapelajaran}}</td>
                                            <td>{{$d->nilai}}</td>
                                            <td>
                                                {{$d->nama_nilai}}
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


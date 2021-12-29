@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA NILAI KELAS {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                             <a href="{{url('guru/nilai_pdf_kelas/'.$kelas->id_kelas.'/'.$tahun->id_tahun)}}" class="btn btn-success waves-effect" type="button">Eksport data penilaian kelas {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}</a>
                             <a href="{{url('guru/nilai/create/'.$kelas->id_kelas.'/'.$tahun->id_tahun)}}" class="btn btn-success waves-effect" type="button">Tambah data penilaian kelas {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}</a>
                        </h2>
                        <br>
                        <select class="form-control show-tick" name="id_tahun" onchange="siswaidtahun(this.value)">
                                    <option value="0">
                                           Pilih siswa untuk melihat nilai per siswa kelas {{strtoupper($kelas->nama_kelas)}} - Tahun Ajaran : {{strtoupper($tahun->priode_tahun)}}
                                    </option>
                                    @foreach($pilih as $t)
                                        <option value="{{$t->id_siswa}}">
                                            {{$t->nis}} - {{$t->nama_siswa}}
                                        </option>
                                    @endforeach
                            </select>
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
                                                 <a href="{{url('guru/nilai/edit/'.$d->id_nilai.'/'.$kelas->id_kelas.'/'.$tahun->id_tahun)}}" class="btn btn-success waves-effect" type="button">Edit </a>
                                                 &nbsp;
                                                  <a href="{{url('guru_nilai_hapus/'.$d->id_nilai)}}" class="btn btn-danger waves-effect" type="button" onclick="return confirm('hapus nilai?')">Hapus </a>
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
<script type="text/javascript">
    function siswaidtahun(value){

        location.href = "{{url('guru/nilai/siswa/')}}"+"/"+value+"/"+"{{$kelas->id_kelas}}"+"/"+"{{$tahun->id_tahun}}";
    }
</script>
@endsection


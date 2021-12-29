@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA SISWA
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                <div class="header">
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" name="id_tahun" onchange="siswaidtahun(this.value)">
                                    <option value="0">
                                           Pilih tahun ajaran
                                    </option>
                                    @foreach($tahun as $t)
                                        <option value="{{$t->id_tahun}}" {{$id_tahun == $t->id_tahun?'selected':''}}>
                                            {{$t->priode_tahun}}
                                        </option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                    <div class="header">
                        <h2>
                            @if($id_tahun != NULL)
                             <a href="{{url('admin/siswa/create_page/'.$id_tahun)}}" class="btn btn-success waves-effect" type="button">+ Tambah data</a>
                             <a href="{{url('#')}}" class="btn btn-success waves-effect" type="button">Import data</a>
                             <a href="{{url('admin/siswa_pdf_export/'.$id_tahun)}}" class="btn btn-success waves-effect" target="_blank">Eksport data</a>
                           @endif
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
                                            <th>Kelas</th>
                                            <th>Wali</th>
                                            <th>Kode Unik</th>
                                            <th>No Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $key => $d)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$d->nis}}</td>
                                            <td>{{$d->nama_siswa}}</td>
                                            <td>{{$d->nama_kelas}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->kode_unik}}</td>
                                             <td>{{$d->no_telepon}}</td>
                                            <td>
                                                 <a href="{{url('admin/siswa/edit/'.$d->id_siswa.'/'.$id_tahun)}}"><i class="material-icons">create</i> </a>
                                                &nbsp;
                                                 <a
                                                 onclick="return confirm('Apakah anda yakin untuk menghapus data?')"
                                                 href="{{url('admin/siswa/delete/'.$d->id_siswa)}}"><i class="material-icons">delete</i> </a>
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

        location.href = "{{url('admin/siswa/')}}"+"/"+value;
    }
</script>
@endsection


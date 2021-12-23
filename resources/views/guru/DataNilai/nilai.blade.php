@extends('guru.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PILIH KELAS TAHUN TERLEBIH DAHULU</h2>
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
        </div>

        <!-- Widgets -->
        
        <div class="row clearfix">
            @if($id_tahun!=NULL)
            @foreach($arr as $r)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                @if($r['ket']=='no')
                <a href="#" onclick="return alert('anda tidak meiliki akses untuk kelas ini!')">
                @else
                <a href="{{url('guru/nilai/'.$r['id_kelas'].'/'.$id_tahun)}}">
                @endif
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">directions_bus</i>
                    </div>
                    <div class="content">
                        <div class="text" style="font-size: 30pt;">{{$r['nama_kelas']}}</div>
                        
                    </div>
                </div>
            </a>
            </div>
            @endforeach
            @endif
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        
    </div>
       
    </div>
</section>
<script type="text/javascript">
    function siswaidtahun(value){

        location.href = "{{url('guru/kelas/')}}"+"/"+value;
    }
</script>
@endsection
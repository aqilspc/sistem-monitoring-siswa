<html>
    <body>
    <div class="row">
        <div class="col-lg-12margin-tb">
          <div class="pull-leftmt-2">
            <h3 style="text-align: center">LEMBAGA PENDIDIKAN</h3>
            <h2 style="text-align: center">MIS NU SABILUN NAJAH 26</h2>
            <h4 style="text-align: center">TAHUN AJARAN {{$tahun->priode_tahun}}</h4><hr>
          </div>

          <p align="center">LAPORAN PENILAIN HASIL BELAJAR</p>

      </div>

      <div>
        <table style="width: 50%">
          <tr>
            <td>Nama</td><td>: {{$siswa->nama_siswa}}</td>
          </tr>
          <tr>
            <td>NIS</td><td>: {{$siswa->nis}}</td>
          </tr>
          <tr>
            <td>Kelas</td><td>: {{$kelas->nama_kelas}}</td>
          </tr>
        </table>
      </div>

      </div>
      <br>
      <table class="table table-hover" border="1" style="width: 100%"> 
        <tbody>
      <tr>

        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>KKM</th>
        <th>Nilai</th>
        <th>Status</th>
      </tr>
      
      @foreach($arr as $key => $d)
      <tr>
          <td align="center">{{$key+1}}</td>
          <td>{{$d['nama_matapelajaran']}}</td>
          <td align="center">{{$d['kkm']}}</td>
          <td align="center">{{$d['rata_rata']}}</td>
          <td align="center">{{$d['status']}}</td>
      </tr>
     @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" align="center">Nilai rata-rata</td>
                <td colspan="1" align="center">{{$totalSemua}}</td>
            </tr>

        </tfoot>
      
    
    
    
      </table>
      <!-- Bootstrap 4 -->
      <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
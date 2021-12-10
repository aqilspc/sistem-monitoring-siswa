@extends('user.layout.master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3" style="padding-top: 100px">
              <div class="section-heading">
                <h4><b>DATA PENILAIAN</b></h4>
                {{-- <h2><em>{{$siswa->nama_siswa}}</em></h2> --}}
              </div>
            </div>
           <div class="col-lg-12 offset-lg-12">

              <table class="table table-striped" id="tableokrole">
                
                  <thead>
                    
                    <button style="padding-block-end: 10">export</button>
                    <tr>
                      <th>Mata Pelajaran</th>
                      <th>Tugas</th>
                      <th>Tanggal</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach($data as $d) --}}
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    {{-- @endforeach --}}
                  </tbody>
                </table>

            </div>
           
          </div>
        </form>
      </div>
    </div>
  </div>
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js "></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tableokrole').DataTable();
} );
</script>
@endsection
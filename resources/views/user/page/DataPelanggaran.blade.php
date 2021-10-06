@extends('user.layout.master')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3" style="padding-top: 100px">
              <div class="section-heading">
                <h4><b>DATA PELANGGARAN</b></h4>
                <h2><em>Naily Ikmalul Insiyah</em></h2>
              </div>
            </div>
            <div class="col-lg-8 offset-lg-2">
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Jenis Pelanggaran</th>
                      <th>Keterangan Pelanggaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>16-11-2021</td>
                      <td>Ringan</td>
                      <td>Izin</td>
                    </tr>
                    <tr>
                      <td>16-11-2021</td>
                      <td>Ringan</td>
                      <td>Tidak memakai dasi</td>
                    </tr>
                  </tbody>
                </table>
            </div>
           
          </div>
        </form>
      </div>
    </div>
  </div>
   

@endsection
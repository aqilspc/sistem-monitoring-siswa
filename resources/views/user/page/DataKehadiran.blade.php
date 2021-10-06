@extends('user.layout.master')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3" style="padding-top: 100px">
              <div class="section-heading">
                <h4><b>DATA KEHADIRAN</b></h4>
                <h2><em>Naily Ikmalul Insiyah</em></h2>
              </div>
            </div>
            <div class="col-lg-8 offset-lg-2">
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Jam</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>11-10-2021</td>
                      <td>Izin</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>11-10-2021</td>
                      <td>Izin</td>
                      <td>5</td>
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
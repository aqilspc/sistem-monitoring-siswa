@extends('user.layout.master')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3" style="padding-top: 100px">
              <div class="section-heading">
                <h4><b>DATA TAGIHAN</b></h4>
                <h2><em>Naily Ikmalul Insiyah</em></h2>
              </div>
            </div>
            <div class="col-lg-8 offset-lg-2">
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Jenis Tagihan</th>
                      <th>Jumlah Tagihan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Iuran HUT</td>
                      <td>30.000</td>
                      <td>Lunas</td>
                    </tr>
                    <tr>
                        <td>Iuran HUT</td>
                        <td>30.000</td>
                        <td>Lunas</td>
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
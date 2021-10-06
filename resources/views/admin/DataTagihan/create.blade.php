@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA TAGIHAN</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Tagihan
                        </h2>
                        
                    </div>
                    <div class="body">
                        <form>
                            
                            <label for="nis">NAMA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nis" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <label for="nis">JENIS TAGIHAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nis" class="form-control" placeholder="Jenis Tagihan">
                                </div>
                            </div>
                            <label for="nis">JUMLAH TAGIHAN</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="double" id="nis" class="form-control" placeholder="Jumlah Tagihan">
                                </div>
                            </div>
                            <label for="status">STATUS</label>
                            <div class="form-group">
                                <div class="demo-radio-button">
                                    <input name="group1" value= "Hadir" type="radio" id="Lunas" class="with-gap">
                                    <label for="Lunas">Lunas</label>
                                    <input name="group1" value= "Belum_Lunas" type="radio" id="Belum_Lunas" class="with-gap">
                                    <label for="Belum_Lunas">Belum Lunas</label>
                                </div>
                            </div>
                            <div>
                            <button type="button" class="btn btn-primary center-block" >SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->
        
    </div>
</section>
@endsection
@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA GURU</h2>
        </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Data Guru
                        </h2>
                        
                    </div>
                    <div class="body">
                         <form enctype="multipart/form-data" method="POST" action="{{url('admin/guru/create')}}">
                            @csrf
                            
                            <label for="nip">NIP</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nip" class="form-control" placeholder="NIP">
                                </div>
                            </div>
                            <label for="nama_guru">NAMA GURU</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru">
                                </div>
                            </div>
                            <label for="no_telepon">NO TELP.</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon Wali">
                                </div>
                            </div>
                            <label for="email">EMAIL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                   <!--          <label for="kode_unik">KODE UNIK</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="kode_unik" class="form-control" placeholder="Kode Unik">
                                </div>
                            </div> -->
                            <div>
                            <button type="submit" class="btn btn-primary center-block" >SUBMIT</button>
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
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Monitoring | MIS NU SABILUN NAJAH 26</title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{url('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Multi Select Css -->
    <link href="{{url('plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
    
    <!-- Waves Effect Css -->
    <link href="{{url('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{url('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

     <!-- JQuery DataTable Css -->
    <link href="{{url('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">MIS NU SABILUN NAJAH 26</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();" style="cursor: pointer;">
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf </form>
                            <i class="material-icons">logout</i>
                           <!--  <span class="label-count">1</span> -->
                        </a>
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <a style="cursor: pointer;" data-toggle="modal" data-target="#gantiFoto">
                        <img src="{{Auth::user()->remember_token}}" width="48" height="48" alt="User" />
                    </a>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selamat Datang </div>
                    <div class="email">{{Auth::user()->name}}</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu</li>
                    <li class="active">
                        <a href="{{url('home')}}">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data</span>
                        </a>
                        <ul class="ml-menu">
                            @if(Auth::user()->role=='admin')
                            <li>
                                <a href="{{url('admin/tahun')}}">Tahun Ajaran</a>
                            </li>
                            <li>
                                <a href="{{url('admin/siswa')}}">Siswa</a>
                            </li>
                            <li>
                                <a href="{{url('admin/kehadiran')}}">Kehadiran</a>
                            </li>
                            <li>
                                <a href="{{url('admin/pelanggaran')}}">Pelanggaran</a>
                            </li>
                            <li>
                                <a href="{{url('admin/tagihan')}}">Tagihan</a>
                            </li>
                            <li>
                                <a href="{{url('admin/kelas')}}">Kelas</a>
                            </li>

                            <li>
                                <a href="{{url('admin/matapelajaran')}}">Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href="{{url('admin/guru')}}">Guru</a>
                            </li>
                            <li>
                                <a href="{{url('guru/kelas')}}">Nilai</a>
                            </li>
                            @else
                            <li>
                                <a href="{{url('guru/kelas')}}">Nilai</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @if(Auth::user()->role=='admin')
                    <li>
                        <a href="{{url('admin/kegiatan')}}">
                            <i class="material-icons">assignment</i>
                            <span>Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/kebijakan')}}">
                            <i class="material-icons">gavel</i>
                            <span>Kebijakan</span>
                        </a>
                    </li>  
                    @endif                
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; {{date('Y')}} <a href="javascript:void(0);">Admin - Sistem Monitoring KBM Siswa</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>
    @yield('content')
    

     <!-- Modal -->
  <div class="modal fade" id="gantiFoto" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change profile</h4>
        </div>
        <div class="modal-body">
        <form enctype="multipart/form-data" method="POST" action="{{url('admin/update/profile')}}">
                            @csrf
                            
                            <label for="nama_kegiatan">NAMA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" placeholder="nama kegiatan">
                                </div>
                            </div>
                            <label for="gambar">FOTO</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="foto" class="form-control" placeholder="gambar">
                                    <input type="hidden" name="old_foto" value="{{Auth::user()->remember_token}}">
                                </div>
                            </div>
                            <label for="keterangan">EMAIL</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{Auth::user()->email}}" name="email" class="form-control" placeholder="nama kegiatan">
                                </div>
                            </div>
                            <label for="tanggal">Password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="password"  class="form-control" placeholder="Password">
                                    <input type="hidden" name="old_password" value="{{Auth::user()->password}}">
                                </div>
                                <small>Isi bila ada perubahan</small>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary center-block" >SUBMIT</button>
                            </div>
                        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- Jquery Core Js -->
    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{url('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{url('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{url('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{url('plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{url('plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{url('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{url('plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{url('plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{url('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{url('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{url('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>


     <!-- Ckeditor -->
   <!--  <script src="{{url('plugins/ckeditor/ckeditor.js')}}"></script> -->
    
    <!-- Custom Js -->
    <script src="{{url('js/admin.js')}}"></script>
    <script src="{{url('js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{url('js/pages/index.js')}}"></script>
   <!--  <script src="{{url('js/pages/forms/editors.js')}}"></script> -->
    <script src="{{url('js/pages/forms/advanced-form-elements.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{url('js/demo.js')}}"></script>

</body>

</html>

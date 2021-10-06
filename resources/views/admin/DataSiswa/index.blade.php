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
                        <h2>
                            Tabel Data Siswa
                        </h2>
                    </div>
                    <div class="body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row"><div class="col-sm-6"><div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
                                </div>
                            </div>
                            <div class="col-sm-6"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                            </div></div></div><div class="row">
                                <div class="col-sm-12"><button class="btn btn-success waves-effect" type="button">+Tambah data siswa</button></div>
                                <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                           
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 10.333px;" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 90.333px;" aria-label="Nama: activate to sort column ascending">NIS</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 90.3333px;" aria-label="NIS: activate to sort column ascending">Nama</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 90.3333px;" aria-label="Nama Wali: activate to sort column ascending">Nama Wali</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83.3333px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>
                                
                                <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>1941720052</td>
                                        <td>Airi Satou</td>
                                        <td>Brielle Williamson</td>
                                        <td>
                                            <div class="icon">
                                                <span class="group-addon">
                                                    <a href="javascript:void(0);"><i class="material-icons" style="color: rgb(75, 74, 74)">visibility</i></a>
                                                    <a href="javascript:void(0);"><i class="material-icons" style="color: rgb(75, 74, 74)">edit</i></a>
                                                        <a href="javascript:void(0);"><i class="material-icons" style="color: rgb(75, 74, 74)">delete</i></a>
                                                </span>
                                            </div>
                                        </td>
                                </tr><tr role="row" class="even">
                                        <td class="sorting_1">2</td>
                                        <td>1941720052</td>
                                        <td>Angelica Ramos</td>
                                        <td>Brenden Wagner</td>
                                        <td>
                                        <div class="icon">
                                            <span class="group-addon">
                                                <a href="javascript:void(0);"><i class="material-icons" style="color: rgb(75, 74, 74)">visibility</i></a>
                                                <a href="javascript:void(0);"><i class="material-icons" style="color: rgb(75, 74, 74)">edit</i></a>
                                                <a href="javascript:void(0);"><i class="material-icons" style="color: rgb(75, 74, 74)">delete</i></a>
                                            </span>
                                        </div>
                                        </td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
@endsection


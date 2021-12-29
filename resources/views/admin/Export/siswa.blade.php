<title>Sistem Monitoring | MIS NU SABILUN NAJAH 26</title>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<p align="center"> DATA SISWA TA {{$tahun->priode_tahun}}</p>

<table >
    <thead>
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Wali</th>
        <th>Kode Unik</th>
        <th>No Telepon</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $d)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$d->nis}}</td>
            <td>{{$d->nama_siswa}}</td>
            <td>{{$d->nama_kelas}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->kode_unik}}</td>
            <td>{{$d->no_telepon}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

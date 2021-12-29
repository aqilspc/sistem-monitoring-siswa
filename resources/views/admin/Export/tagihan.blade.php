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
<p align="center"> DATA TAGIHAN SISWA</p>
<table>
    <thead>
    <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jumlah</th>
          <th>Jenis</th>
          <th>Status</th>
    </tr>
    </thead>
    <tbody>
     @foreach($data as $key => $d)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$d->nama_siswa}}</td>
        <td>{{$d->jumlah}}</td>
        <td>{{$d->jenis}}</td>
        <td><?php echo str_replace('_', ' ', $d->status)?></td>
    </tr>
    @endforeach
    </tbody>
</table>

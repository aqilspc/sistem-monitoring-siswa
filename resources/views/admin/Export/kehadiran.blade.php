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
<p align="center"> DATA KEHADIRAN SISWA</p>
<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Jam</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $d)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$d->nama_siswa}}</td>
            <td>{{$d->tanggal}}</td>
            <td>{{$d->status}}</td>
            <td>{{$d->jam}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

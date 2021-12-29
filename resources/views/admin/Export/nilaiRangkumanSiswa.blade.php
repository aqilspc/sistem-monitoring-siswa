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
<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>Nilai Rata-rata</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
     @foreach($arr as $key => $d)
        <tr>
           <td>{{$key+1}}</td>
           <td>{{$d['nama_matapelajaran']}}</td>
           <td>{{$d['rata_rata']}}</td>
           <td>{{$d['status']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

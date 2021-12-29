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
<p align="center"> DATA NILAI {{$siswa->nama_siswa}} NIS {{$siswa->nis}} KELAS : {{$kelas->nama_kelas}} TA {{$tahun->priode_tahun}}</p>
<table>
    <thead>
    <tr>
    <th>No</th>
    <th>Mata Pelajaran</th>
    <th>Nilai</th>
    <th>Keterangan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $d)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$d->nama_matapelajaran}}</td>
          <td>{{$d->nilai}}</td>
          <td>{{$d->nama_nilai}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

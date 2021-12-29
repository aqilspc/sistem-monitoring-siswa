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
<p align="center"> DATA GURU</p>
@php $model = new App\Models\Guru(); @endphp
<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Mengajar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $dt)
    @php $mengajar = $model->getDataMengajar($dt->id_guru); @endphp
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $dt->name }}</td>
            <td>{{ $dt->no_hp }}</td>
            <td>{{ $dt->email }}</td>
            <td>
                
                    <ul>
                        @foreach($mengajar as $m)
                        <li>
                            Mapel : {{$m->nama_matapelajaran}} - Kelas : {{$m->nama_kelas}} - TA : {{$m->priode_tahun}}
                        </li>
                        @endforeach
                    </ul>
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

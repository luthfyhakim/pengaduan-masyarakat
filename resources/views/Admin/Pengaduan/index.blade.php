@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('header' ,'Data Pengaduan')
    
@section('content')
    <table id="pengaduanTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Isi laporan</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            {{-- $k = key -> $v = value --}}
            @foreach ($pengaduan as $k => $v)
            <tr>
                {{-- setiap perulangan + 1 --}}
                <td>{{ $k += 1 }}</td>
                <td>{{ $v->tgl_pengaduan->format('d-M-Y') }}</td>
                <td>{{ $v->isi_laporan }}</td>
                <td>
                    @if ($v->status == '0')
                        <span href="#" class="badge bg-danger text-white">Pending</span>
                    @elseif($v->status == 'proses')
                        <a href="#" class="badge bg-warning">Proses</a>
                    @else
                        <a href="#" class="badge text-bg-success">Sukses</a>
                    @endif
                </td>
                <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}" style="text-decoration: underline">Lihat</a></td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
    
@endsection

@section('js')

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script
        >$(document).ready(function ()
         {
            $('#pengaduanTable').DataTable();
        });
    </script>
    
@endsection
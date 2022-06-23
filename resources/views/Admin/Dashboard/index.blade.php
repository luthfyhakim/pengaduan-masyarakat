@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="row ">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">Petugas</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $petugas }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">Masyarakat</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $masyarakat }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-warning text-white">Pengaduan Proses</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $proses }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-success text-white">Pengaduan Selesai</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $selesai }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

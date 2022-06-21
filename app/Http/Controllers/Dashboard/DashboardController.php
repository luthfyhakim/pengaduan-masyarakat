<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Petugas;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all()->count();
        $masyarakat = Masyarakat::all()->count();
        $pengaduanProses = Pengaduan::where('status', 'proses')->get()->count();
        $pengaduanSelesai = Pengaduan::where('status', 'selesai')->get()->count();

        return view('Admin.Dashboard.index', [
            'petugas' => $petugas,
            'masyarakat' => $masyarakat,
            'proses' => $pengaduanProses,
            'selesai' => $pengaduanSelesai
        ]);
    }
}

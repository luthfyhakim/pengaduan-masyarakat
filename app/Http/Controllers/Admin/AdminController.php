<?php

namespace App\Http\Controllers\Admin;

use App\Models\Petugas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //mengarahkan ke halaman login
    public function formLogin()
    {
        return view('Admin.login');
    }

    //authen untuk login petugas
    public function login(Request $request)
    {
        $username = Petugas::where('username', $request->username)->first();

        if (!$username){
            return redirect()->back()->with(['pesan' => 'USERNAME TIDAK TERDAFTAR!']);
        }
        
        $password = Hash::check($request->password, $username->password);
        
        if (!$password){
            return redirect()->back()->with(['pesan' => 'PASSWORD TIDAK SESUAI!']);
        }

        $auth = Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]);

            if(!$auth){
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->back()->with(['pesan' => 'AKUN TIDAK TERDAFTAR']);
            }      
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.formLogin');
    }
}

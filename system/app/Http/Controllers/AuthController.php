<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Pembeli;
use App\Models\Penjual;
use Auth;

class AuthController extends Controller{

	function showLogin(){
		return view('login');
	}

	function showRegistrasi(){
		return view('registrasi');
	}

	function showAdminLogin(){
		return view('admin.login');
	}

	function logout(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('admin/beranda');
	}

	function showAdminRegistrasi(){
		return view('admin.registrasi');
	}

	function loginProcess(){
		// if(Auth::attempt(['email' => request('email'), 'password' => request('password'), 'retype password' => request('password')]))
		// {
		// 	return redirect('admin/beranda')->with('success', 'Login Berhasil');
		// }else{
		// 	return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
		// }
		// return view('admin/beranda');

		$email = request('email');
		$user = Pembeli::where('email', $email)->first();
		if($user){
			$guard = 'pembeli';
		}else{
			$user = Penjual::where('email', $email)->first();
			if($user) {
				$guard = 'penjual';
			}else{
				$guard = false;
			}
		}

		if(!$guard){
			return back()->with('danger', 'Login Gagal, Email Tidak Ditemukan Di Database');
		}else{
			if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect("admin/beranda.$guard")->with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
			}
			
		}


		// if(request('login_as')== 1){
		// 	if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
		// 		return redirect('admin/beranda.pembeli')->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
		// 	}
		// }else{
		// 	if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
		// 		return redirect('admin/beranda.penjual')->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
		// 	}
		// }
	}

	function registrasiProcess(){
		if(Auth::attempt(['username' => request('username'), 'email' => request('email'), 'password' => request('password'), 'retype password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Registrasi Berhasil');
		}else{
			return back()->with('danger', 'Registrasi Gagal Silahkan Cek Kembali Email Dan Password Anda');
		}

		return view('admin/registrasi');
	}
}
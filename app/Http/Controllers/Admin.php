<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Parking;

class Admin extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        //dd('aaaa');
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/laporan');
        }

        return back()->with('loginError', 'Login failed !');
    }



    public function laporan(Request $request)
    {
        $parking = Parking::all();
        if ($request->get('awal') && $request->get('akhir')) {
            $parking = Parking::whereBetween('masuk', [$request->get('awal') . " 00:00:00", $request->get('akhir') . " 23:59:59"])->get();
        }
        return view('admin.laporan', compact('parking'));
    }
}

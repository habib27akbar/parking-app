<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;

class Action extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function save_plat_nomor(Request $request)
    {


        $data = Parking::where('plat', $request->post('plat'))->get();
        $input = true;
        $kode_parkir = '';
        foreach ($data as $key) {
            if (!$key['keluar']) {
                $input = false;
                $kode_parkir = $key['code'];
            }
        }
        if ($input) {
            $length = 5;
            $characters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            $validatedData = $request->validate(
                [
                    'plat' => 'required|min:8'
                ]
            );

            $validatedData['code'] = $randomString;
            $validatedData['masuk'] = date('Y-m-d H:i:s');

            Parking::create($validatedData);
            return redirect('/home/view_code')->with('success', 'Kode Parkir Anda ' . $randomString);
        } else {
            return redirect('/home/keluar')->with('success', 'Silahkan masukan kode parkir anda');
        }
    }

    public function keluar(Request $request)
    {

        $data = Parking::where('code', $request->post('code'))->first();

        if (isset($data['masuk'])) {
            if (!isset($data['keluar'])) {
                $validatedData['keluar'] = date('Y-m-d H:i:s');
                Parking::where('code', $request->post('code'))->update($validatedData);
            }

            $data = Parking::where('code', $request->post('code'))->firstOrFail();
            $date1 = strtotime($data['masuk']);
            $date2 = strtotime($data['keluar']);

            $hour = round(abs($date1 - $date2) / (60 * 60));
            $data_biaya = 3000 * $hour;
            $arr = [
                'plat' => $data['plat'],
                'biaya' => intval($data_biaya),
                'tgl_masuk' => $data['masuk'],
                'tgl_keluar' => $data['keluar']
            ];
            //var_dump($arr);
            //exit;
            return view('biaya', compact('arr'));
        } else {
            return redirect('/home/keluar')->with('gagal', 'Kode Parkir tidak ditemukan');
        }

        //echo "Difference between two dates is " . $hour = abs($timestamp2 - $timestamp1) / (60 * 60) . " hour(s)";

    }
}

<?php

namespace App\Controllers;

class JerukSambal extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];

        return view('jeruk-sambal/index', $data);
    }

    public function beranda()
    {
        $data = [
            'title' => 'Beranda'
        ];

        return view('jeruk-sambal/beranda', $data);
    }

    public function suhu()
    {
        $data = [
            'title' => 'Data-Suhu'
        ];

        return view('jeruk-sambal/suhu', $data);
    }
    public function gas()
    {
        $data = [
            'title' => 'Data-Gas'
        ];

        return view('jeruk-sambal/gas', $data);
    }

    public function grafik()
    {
        $data = [
            'title' => 'Grafik'
        ];

        return view('jeruk-sambal/grafik', $data);
    }
}

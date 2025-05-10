<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function notifikasi()
    {
        $notifikasi = [
            ["tanggal" => "19/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
            ["tanggal" => "18/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
            ["tanggal" => "17/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
            ["tanggal" => "16/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
        ];
        return view('pages.notifikasi', compact('notifikasi'));
    }
}

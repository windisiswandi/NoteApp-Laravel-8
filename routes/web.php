<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $notes = [
        [
            'title' => 'Pertemuan dengan Klien Baru',
            'date' => '2024-03-20',
            'note' => 'Diskusi tentang proyek baru.',
            'slug' => 'pertemuan-dengan-klien-baru'
        ],
        [
            'title' => 'Rapat Tim',
            'date' => '2024-03-18',
            'note' => 'Review kemajuan proyek.',
            'slug' => 'rapat-tim'
        ],
        [
            'title' => 'Pengiriman Barang',
            'date' => '2024-03-15',
            'note' => 'Pengiriman ke pelanggan.',
            'slug' => 'pengiriman-barang'
        ],
        [
            'title' => 'Pembayaran Tagihan',
            'date' => '2024-03-12',
            'note' => 'Pembayaran tagihan ke pemasok.',
            'slug' => 'pembayaran-tagihan'
        ],
        [
            'title' => 'Pelatihan Karyawan',
            'date' => '2024-03-10',
            'note' => 'Pelatihan karyawan baru.',
            'slug' => 'pelatihan-karyawan'
        ],
        [
            'title' => 'Update Perangkat Lunak',
            'date' => '2024-03-08',
            'note' => 'Update sistem ke versi terbaru.',
            'slug' => 'update-perangkat-lunak'
        ],
        [
            'title' => 'Pemasaran Online',
            'date' => '2024-03-05',
            'note' => 'Kampanye iklan online.',
            'slug' => 'pemasaran-online'
        ],
        [
            'title' => 'Diskusi Proyek',
            'date' => '2024-03-02',
            'note' => 'Diskusi tentang kemajuan proyek.',
            'slug' => 'diskusi-proyek'
        ],
        [
            'title' => 'Meeting dengan Investor',
            'date' => '2024-02-28',
            'note' => 'Presentasi kepada calon investor.',
            'slug' => 'meeting-dengan-investor'
        ],
        [
            'title' => 'Pertemuan Penjualan',
            'date' => '2024-02-25',
            'note' => 'Pertemuan dengan calon pelanggan.',
            'slug' => 'pertemuan-penjualan'
        ]
    ];


    return view('index', ["notes" => $notes]);
});

Route::get("/note/{nama}", function ($note) {
    return "ini note $note";
});


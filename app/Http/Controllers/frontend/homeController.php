<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Ace;
use App\Models\Aluna;
use App\Models\Breeze;
use App\Models\Putanutu;

class homeController extends Controller
{
    public function index()
    {
        $data       = [
            'title'     => 'Beranda',
            'metaDescription'   => 'Perumahan Telaga Kahuripan menawarkan rumah eksklusif, ruko, dan area komersial strategis di Bogor. Cocok untuk hunian dan investasi.',
        ];
        return view('frontend/home/index', $data);
    }

    public function produk()
    {
        $data       = [
            'title'                 => 'Produk',
            'metaDescription'       => 'Temukan unit properti Telaga Kahuripan dengan desain modern, lokasi strategis, dan nilai investasi tinggi. Cocok untuk hunian dan bisnis bilal.',
        ];
        return view('frontend/produk/index', $data);
    }

    public function aluna()
    {
        $data       = [

            'title'     => 'Aluna',
            'produks'   => Aluna::get()
        ];

        return view('frontend/aluna/index', $data);
    }

    public function putanutu()
    {

        $data       = [
            'title'     => 'Putanutu',
            'produks'   => Putanutu::get()
        ];
        return view('frontend/putanutu/index', $data);
    }

    public function ace()
    {
        $data   = [
            'title'     => 'Ace',
            'produks'   => Ace::get()
        ];
        return view('frontend/ace/index', $data);
    }

    public function breeze()
    {

        $data       = [
            'title'     => 'Breeze',
            'produks'   => Breeze::get(),
        ];
        return view('frontend/breeze/index', $data);
    }

    public function kanaka()
    {
        $data       = [
            'title'     => 'Kanaka',
            'metaDescription'       => 'Area komersial Telaga Kahuripan cocok untuk ruko, kantor, dan usaha strategis dengan akses mudah dan lingkungan premium.',
        ];
        return view('frontend/kanaka/index', $data);
    }

    public function kontak()
    {
        $data       = [
            'title'     => 'Kontak',
            'metaDescription'       => 'Hubungi marketing Telaga Kahuripan untuk informasi harga, promo, dan ketersediaan unit hunian dan area komersial.',
        ];
        return view('frontend/kontak/index', $data);
    }

    public function tentangKami()
    {
        $data       = [
            'title'     => 'Tentang Kami'
        ];
        return view('frontend/tentangKami/index', $data);
    }
}

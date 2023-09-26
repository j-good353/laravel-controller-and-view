<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    // Menampilkan informasi kampus
    public function index()
    {
        return view('kampus.informasi'); // Menggunakan view dengan nama 'informasi.blade.php' di dalam direktori 'resources/views/kampus/'
    }
}

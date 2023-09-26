@extends('layouts.app')

@section('content')
    <h1>Selamat Datang di Aplikasi Pengenalan Teman-Teman</h1>
    <p>Silakan pilih halaman yang ingin Anda kunjungi:</p>
    <ul>
        <li><a href="{{ route('profile') }}">Profile Pembuat</a></li>
        <li><a href="{{ route('info') }}">Informasi Kampus</a></li>
    </ul>
@endsection

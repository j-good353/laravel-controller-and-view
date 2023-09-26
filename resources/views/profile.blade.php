<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pembuat</title>
</head>
<body>
    <header>
        <h1>Profil Pembuat</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Halaman Beranda</a></li>
            <li><a href="{{ route('info') }}">Informasi Kampus</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Nama: [Nama Anda]</h2>
            <p>NIM: [NIM Anda]</p>
            <p>Jurusan: [Jurusan Anda]</p>
        </section>
    </main>
</body>
</html>

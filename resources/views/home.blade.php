@extends('layout')

@section('content')

    <div style="text-align: center; margin-bottom: 2rem;">
        <h2>Selamat Datang di Portal Sekolah!</h2>
        
        <img src="{{ asset('img/sekolah.jpg') }}" alt="Gedung Sekolah" style="max-width: 100%; height: auto; border-radius: 10px; margin: 20px 0; max-height: 400px; object-fit: cover;">
        
        <p style="font-size: 1.1em; line-height: 1.6; text-align: justify;">
            Sekolah kami adalah institusi pendidikan unggulan yang berfokus pada pengembangan keterampilan di bidang teknologi informasi dan komunikasi. Program keahlian seperti <strong>Rekayasa Perangkat Lunak (RPL)</strong> dan <strong>Teknik Komputer dan Jaringan (TKJ)</strong> dirancang untuk membekali siswa dengan kemampuan praktis, baik dalam pemrograman, pengelolaan jaringan, maupun pengembangan aplikasi berbasis web dan mobile.
        </p>
        <p style="font-size: 1.1em; line-height: 1.6; text-align: justify;">
            Melalui pendekatan pembelajaran <em>project-based learning</em>, kami mendorong setiap siswa untuk menjadi individu yang aktif, kreatif, dan siap menghadapi tantangan dunia industri.
        </p>
        <p style="margin-top: 15px;">
            Silakan akses menu <strong>Data Siswa</strong> untuk melihat daftar peserta didik.
        </p>
    </div>

@endsection

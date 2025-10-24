@extends('layouts.app')

@section('title', 'CV M. Ilham Satriawan Haykal')

@section('content')

@include('includes.header')

<x-section title="Tentang Saya">
    Saya adalah seorang mahasiswa Sistem Informasi yang memiliki minat besar dalam bidang pengembangan sistem berbasis teknologi dan jaringan komputer. 
    Saya terbiasa menggunakan perangkat lunak dan bahasa pemrograman untuk mendukung proses bisnis dan efisiensi data. 
    Saya memiliki kemampuan analisis, pemecahan masalah, dan dapat bekerja baik secara individu maupun dalam tim.
</x-section>

<x-section title="Pendidikan">
    <ul>
        <li><strong>S1 Sistem Informasi</strong> – Universitas Teknologi Yogyakarta (2023–2027)</li>
        <li><strong>SMK Negeri 2 Bengkulu Utara</strong> – Teknik Komputer & Jaringan (2020–2023)</li>
        <li><strong>SMP Negeri 1 Bengkulu Utara</strong> (2017–2020)</li>
        <li><strong>SD Negeri 17 Bengkulu Utara</strong> (2011–2017)</li>
    </ul>
</x-section>

<x-section title="Pengalaman Kerja">
    <strong>Magang di TERRA COMPUTER</strong>
    <ul>
        <li>Mengonfigurasi dan melakukan perawatan perangkat jaringan komputer.</li>
        <li>Melakukan instalasi sistem operasi dan troubleshooting perangkat.</li>
        <li>Membantu pelanggan dalam konsultasi dan perbaikan unit PC dan laptop.</li>
    </ul>

    <strong>Proyek Pribadi & Freelance</strong>
    <ul>
        <li>Mengembangkan website portofolio pribadi menggunakan Laravel dan Bootstrap.</li>
        <li>Membuat sistem inventaris sederhana menggunakan PHP & MySQL.</li>
        <li>Mengelola jaringan Wi-Fi dan maintenance perangkat di lingkungan kecil.</li>
    </ul>
</x-section>

<x-section title="Kemampuan">
    <ul>
        <li>Pemrograman Web (HTML, CSS, JavaScript, PHP, Laravel)</li>
        <li>Administrasi Jaringan (LAN, WLAN, Mikrotik, Cisco)</li>
        <li>Manajemen Database (MySQL, phpMyAdmin)</li>
        <li>Desain Antarmuka (UI/UX dasar dengan Figma)</li>
        <li>Analisis Sistem Informasi dan Dokumentasi Teknis</li>
        <li>Instalasi dan konfigurasi sistem operasi (Windows & Linux)</li>
        <li>Komunikasi dan Kerjasama Tim</li>
    </ul>
</x-section>

@endsection

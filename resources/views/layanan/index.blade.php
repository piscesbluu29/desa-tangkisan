@extends('layouts.app')

@section('title', 'Layanan Desa')

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container text-center">

        <span class="section-badge">Pelayanan Desa</span>

        <h1 class="page-title">
            Layanan Desa Tangkisan
        </h1>

        <p class="page-subtitle">
            Pemerintah Desa Tangkisan menyediakan berbagai layanan administrasi untuk masyarakat secara cepat, mudah, dan transparan.
        </p>

    </div>
</section>

{{-- Layanan --}}
<section class="feature-section">
    <div class="container">

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-file-earmark-text-fill"></i>
                    <h4>Surat Domisili</h4>
                    <p>Pelayanan pembuatan surat domisili bagi warga desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-person-vcard-fill"></i>
                    <h4>Surat Pengantar</h4>
                    <p>Pengantar untuk kebutuhan administrasi kependudukan.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-house-fill"></i>
                    <h4>Surat Usaha</h4>
                    <p>Penerbitan surat keterangan usaha bagi pelaku UMKM.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-people-fill"></i>
                    <h4>Pelayanan Umum</h4>
                    <p>Berbagai layanan administrasi masyarakat Desa Tangkisan.</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- Alur --}}
<section class="vision-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Alur Pelayanan</span>

            <h2 class="section-title">
                Proses Pengajuan Layanan
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-1-circle-fill"></i>
                    <h4>Datang</h4>
                    <p>Datang ke kantor desa dengan membawa persyaratan.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-2-circle-fill"></i>
                    <h4>Verifikasi</h4>
                    <p>Petugas melakukan pengecekan dokumen.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-3-circle-fill"></i>
                    <h4>Proses</h4>
                    <p>Permohonan diproses sesuai jenis pelayanan.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-4-circle-fill"></i>
                    <h4>Selesai</h4>
                    <p>Dokumen dapat diambil oleh pemohon.</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">

        <h2>Butuh Bantuan Pelayanan?</h2>

        <p>
            Hubungi perangkat Desa Tangkisan untuk memperoleh informasi dan pelayanan administrasi.
        </p>

        <a href="{{ route('kontak') }}" class="btn-primary-custom">
            Hubungi Kami
        </a>

    </div>
</section>

@endsection
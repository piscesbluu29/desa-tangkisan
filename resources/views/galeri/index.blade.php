@extends('layouts.app')

@section('title', 'Galeri Desa')

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container text-center">

        <span class="section-badge">Galeri Desa</span>

        <h1 class="page-title">
            Galeri Desa Tangkisan
        </h1>

        <p class="page-subtitle">
            Dokumentasi kegiatan masyarakat, pembangunan desa, wisata, UMKM, dan berbagai momen berharga di Desa Tangkisan.
        </p>

    </div>
</section>

{{-- Galeri Foto --}}
<section class="gallery-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Dokumentasi</span>

            <h2 class="section-title">
                Galeri Foto
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="gallery-card">
                    <img src="{{ asset('assets/images/berita/kerja-bakti.png') }}" class="img-fluid" alt="Galeri">
                    <div class="gallery-content">
                        <h5>Kerja Bakti Desa</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-card">
                    <img src="{{ asset('assets/images/wisata/pemandangan1.png') }}" class="img-fluid" alt="Galeri">
                    <div class="gallery-content">
                        <h5>Wisata Alam</h5>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6">
                <div class="gallery-card">
                    <img src="{{ asset('assets/images/gallery/gallery3.jpg') }}" class="img-fluid" alt="Galeri">
                    <div class="gallery-content">
                        <h5>Pelatihan UMKM</h5>
                    </div>
                </div>
            </div> -->

            <div class="col-lg-4 col-md-6">
                <div class="gallery-card">
                    <img src="{{ asset('assets/images/berita/musyawarah.png') }}" class="img-fluid" alt="Galeri">
                    <div class="gallery-content">
                        <h5>Musyawarah Desa</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-card">
                    <img src="{{ asset('assets/images/berita/sosialisasi.png') }}" class="img-fluid" alt="Galeri">
                    <div class="gallery-content">
                        <h5>Sosialisasi SD</h5>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6">
                <div class="gallery-card">
                    <img src="{{ asset('assets/images/gallery/gallery6.jpg') }}" class="img-fluid" alt="Galeri">
                    <div class="gallery-content">
                        <h5>Festival Budaya</h5>
                    </div>
                </div>
            </div> -->

        </div>

    </div>
</section>

{{-- Video --}}
<section class="feature-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Video</span>

            <h2 class="section-title">
                Video Dokumentasi
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-6">
                <div class="video-card">
                    <iframe
                        width="100%"
                        height="315"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="Video Desa"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="video-card">
                    <iframe
                        width="100%"
                        height="315"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="Video Desa"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- CTA --}}
<section class="cta-section">
    <div class="container text-center">

        <h2>Jelajahi Dokumentasi Desa</h2>

        <p>
            Saksikan berbagai kegiatan, pembangunan, dan momen terbaik Desa Tangkisan melalui galeri foto dan video.
        </p>

        <a href="{{ route('home') }}" class="btn-primary-custom">
            Kembali ke Beranda
        </a>

    </div>
</section>

@endsection
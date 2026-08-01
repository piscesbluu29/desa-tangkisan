@extends('layouts.app')

@section('title', 'Berita Desa')

@section('content')

<section class="page-banner">
    <div class="container text-center">

        <span class="section-badge">Berita Desa</span>

        <h1 class="page-title">
            Berita Desa Tangkisan
        </h1>

        <p class="page-subtitle">
            Ikuti informasi terbaru mengenai kegiatan, pembangunan, pengumuman, dan aktivitas masyarakat Desa Tangkisan.
        </p>

    </div>
</section>

<section class="news-section">
    <div class="container">

        <div class="row g-4">

            @foreach($posts as $post)

                <div class="col-lg-4 col-md-6">

                    <div class="news-card">

                        <img src="{{ asset($post['image']) }}"
                            class="img-fluid"
                            alt="{{ $post['title'] }}">

                        <div class="news-content">

                            <span class="news-date">
                                <i class="bi bi-calendar-event"></i>
                                {{ $post['date'] }}
                            </span>

                            <h4>
                                {{ $post['title'] }}
                            </h4>

                            <p>
                                {{ $post['short_description'] }}
                            </p>

                            <a href="{{ route('berita.show', $post['slug']) }}"
                                class="btn-primary-custom">
                                Baca Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

<section class="feature-section">
    <div class="container">

        <div class="text-center mb-5">

            <span class="section-badge">
                Kategori
            </span>

            <h2 class="section-title">
                Informasi Desa
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-megaphone-fill"></i>
                    <h4>Pengumuman</h4>
                    <p>Informasi resmi dari Pemerintah Desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-building-fill"></i>
                    <h4>Pembangunan</h4>
                    <p>Perkembangan pembangunan desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-people-fill"></i>
                    <h4>Kegiatan</h4>
                    <p>Aktivitas masyarakat dan pemerintah desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-shop"></i>
                    <h4>UMKM</h4>
                    <p>Berita mengenai perkembangan UMKM Desa Tangkisan.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="cta-section">
    <div class="container text-center">

        <h2>
            Ikuti Informasi Terbaru
        </h2>

        <p>
            Dapatkan informasi terbaru mengenai kegiatan dan perkembangan Desa Tangkisan.
        </p>

        <a href="{{ route('kontak') }}" class="btn-primary-custom">
            Hubungi Kami
        </a>

    </div>
</section>

@endsection
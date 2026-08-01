@extends('layouts.app')

@section('title', 'Wisata Desa')

@section('content')

{{-- Banner --}}
<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">Wisata Desa</span>

        <h1 class="page-title">
            Destinasi Wisata Desa Tangkisan
        </h1>

        <p class="page-subtitle">
            Jelajahi berbagai destinasi wisata alam yang menyuguhkan suasana sejuk, pemandangan hijau, dan pengalaman terbaik di Desa Tangkisan.
        </p>
    </div>
</section>

{{-- Wisata --}}
<section class="wisata-section">
    <div class="container">

        <div class="row g-4">

            @foreach($places as $place)

                <div class="col-lg-4 col-md-6">

                    <div class="tour-card">

                        <img src="{{ asset($place['image']) }}"
                            class="img-fluid"
                            alt="{{ $place['name'] }}">

                        <div class="tour-content">

                            <span class="section-badge">
                                {{ $place['category'] }}
                            </span>

                            <h4>{{ $place['name'] }}</h4>

                            <p>
                                {{ $place['short_description'] }}
                            </p>

                            <a href="{{ route('wisata.show', $place['slug']) }}"
                                class="btn-primary-custom">
                                Lihat Detail
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

<section class="facility-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Fasilitas</span>

            <h2 class="section-title">
                Fasilitas Wisata
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-car-front-fill"></i>
                    <h4>Area Parkir</h4>
                    <p>Area parkir yang luas dan aman.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-cup-hot-fill"></i>
                    <h4>Kuliner</h4>
                    <p>Tersedia makanan dan minuman lokal.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-camera-fill"></i>
                    <h4>Spot Foto</h4>
                    <p>Berbagai spot foto menarik.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-signpost-fill"></i>
                    <h4>Akses Mudah</h4>
                    <p>Lokasi mudah dijangkau kendaraan.</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- UMKM --}}
<section class="umkm-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">UMKM Desa</span>

            <h2 class="section-title">
                Produk Lokal
            </h2>

            <p class="section-text mx-auto">
                Selain menikmati wisata, pengunjung juga dapat membeli berbagai produk unggulan hasil usaha masyarakat Desa Tangkisan.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-cup-hot-fill"></i>

                    <h4>Kuliner Tradisional</h4>

                    <p>
                        Aneka makanan dan minuman khas yang dibuat oleh masyarakat setempat.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-basket-fill"></i>

                    <h4>Hasil Pertanian</h4>

                    <p>
                        Sayuran dan hasil panen segar langsung dari petani Desa Tangkisan.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-shop"></i>

                    <h4>Produk UMKM</h4>

                    <p>
                        Berbagai produk lokal berkualitas sebagai oleh oleh khas desa.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@include('sections.map-preview')

<section class="cta-section">
    <div class="container text-center">

        <h2>Yuk Kunjungi Desa Tangkisan</h2>

        <p>
            Nikmati keindahan alam, keramahan masyarakat, dan pengalaman wisata yang berkesan.
        </p>

        <a href="{{ route('kontak') }}" class="btn-primary-custom">
            Hubungi Kami
        </a>

    </div>
</section>

@endsection
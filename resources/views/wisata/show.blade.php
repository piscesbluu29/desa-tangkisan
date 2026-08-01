@extends('layouts.app')

@section('title', $place['name'])

@section('content')

<section class="page-banner">
    <div class="container text-center">

        <span class="section-badge">Wisata Desa</span>

        <h1 class="page-title">
            {{ $place['name'] }}
        </h1>

        <p class="page-subtitle">
            Informasi lengkap mengenai destinasi wisata Desa Tangkisan.
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                <img src="{{ asset($place['image']) }}"
                    class="img-fluid rounded-4 shadow"
                    alt="{{ $place['name'] }}">

            </div>

            <div class="col-lg-6">

                <span class="section-badge">
                    {{ $place['category'] }}
                </span>

                <h2 class="section-title">
                    {{ $place['name'] }}
                </h2>

                <p class="section-text">
                    {{ $place['description'] }}
                </p>

                <div class="about-list">

                    <div class="about-item">

                        <div class="about-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>

                        <div>
                            <h5>Lokasi</h5>
                            <p>{{ $place['location'] }}</p>
                        </div>

                    </div>

                    <div class="about-item">

                        <div class="about-icon">
                            <i class="bi bi-stars"></i>
                        </div>

                        <div>
                            <h5>Fasilitas</h5>
                            <p>{{ $place['facility'] }}</p>
                        </div>

                    </div>

                    <div class="about-item">

                        <div class="about-icon">
                            <i class="bi bi-signpost-split-fill"></i>
                        </div>

                        <div>
                            <h5>Akses</h5>
                            <p>{{ $place['access'] }}</p>
                        </div>

                    </div>

                </div>

                <a href="{{ route('wisata') }}" class="btn-primary-custom">
                    Kembali
                </a>

            </div>

        </div>

    </div>
</section>

@endsection
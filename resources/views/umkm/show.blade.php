@extends('layouts.app')

@section('title', $product['name'])

@section('content')

<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">UMKM Desa</span>
        <h1 class="page-title">{{ $product['name'] }}</h1>
        <p class="page-subtitle">
            Informasi produk unggulan UMKM Desa Tangkisan.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-6">
                <img src="{{ asset($product['image']) }}"
                    class="img-fluid rounded-4 shadow"
                    alt="{{ $product['name'] }}">
            </div>

            <div class="col-lg-6">

                <span class="section-badge">{{ $product['category'] }}</span>

                <h2 class="section-title">{{ $product['name'] }}</h2>

                <p class="section-text">
                    {{ $product['description'] }}
                </p>

                <div class="about-list">

                    <div class="about-item">
                        <div class="about-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div>
                            <h5>Pelaku UMKM</h5>
                            <p>{{ $product['owner'] }}</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div>
                            <h5>Keunggulan</h5>
                            <p>{{ $product['benefit'] }}</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h5>Pemasaran</h5>
                            <p>{{ $product['market'] }}</p>
                        </div>
                    </div>

                </div>

                <a href="{{ route('umkm') }}" class="btn-primary-custom">
                    Kembali ke Daftar UMKM
                </a>

            </div>

        </div>
    </div>
</section>

@endsection
@extends('layouts.app')

@section('title', $post['title'])

@section('content')

<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">
            {{ $post['category'] }}
        </span>

        <h1 class="page-title">
            {{ $post['title'] }}
        </h1>

        <p class="page-subtitle">
            Berita dan informasi terbaru dari Pemerintah Desa Tangkisan.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">
                <img src="{{ asset($post['image']) }}"
                    class="img-fluid rounded-4 shadow"
                    alt="{{ $post['title'] }}">
            </div>

            <div class="col-lg-6">

                <span class="section-badge">
                    {{ $post['category'] }}
                </span>

                <h2 class="section-title">
                    {{ $post['title'] }}
                </h2>

                <p class="section-text">
                    {{ Str::limit($post['content'], 180) }}
                </p>

                <div class="about-list">

                    <div class="about-item">
                        <div class="about-icon">
                            <i class="bi bi-calendar-event-fill"></i>
                        </div>
                        <div>
                            <h5>Tanggal</h5>
                            <p>{{ $post['date'] }}</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-icon">
                            <i class="bi bi-folder-fill"></i>
                        </div>
                        <div>
                            <h5>Kategori</h5>
                            <p>{{ $post['category'] }}</p>
                        </div>
                    </div>

                    <div class="about-item">
                        <div class="about-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div>
                            <h5>Penulis</h5>
                            <p>{{ $post['author'] }}</p>
                        </div>
                    </div>

                </div>

                <a href="{{ route('berita') }}" class="btn-primary-custom">
                    Kembali ke Daftar Berita
                </a>

            </div>

        </div>

        <div class="chart-card mt-5">

            <h3 class="mb-4">
                Isi Berita
            </h3>

            <p class="section-text mb-0">
                {{ $post['content'] }}
            </p>

        </div>

    </div>
</section>

@endsection
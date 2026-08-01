@extends('layouts.app')

@section('title','UMKM Desa')

@section('content')

<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">UMKM Desa</span>
        <h1 class="page-title">Produk UMKM Desa Tangkisan</h1>
        <p class="page-subtitle">
            Berbagai produk unggulan hasil karya masyarakat Desa Tangkisan yang mendukung pertumbuhan ekonomi desa.
        </p>
    </div>
</section>

<section class="umkm-section py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="tour-card h-100">
                        <img src="{{ asset($product['image']) }}" class="img-fluid" alt="{{ $product['name'] }}">
                        <div class="tour-content d-flex flex-column">
                            <span class="badge bg-success mb-2">{{ $product['category'] }}</span>
                            <h4>{{ $product['name'] }}</h4>
                            <p>{{ $product['description'] }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('umkm.show',$product['slug']) }}" class="btn-primary-custom">
                                    Detail Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container text-center">
        <h2>Dukung UMKM Desa Tangkisan</h2>
        <p>Dengan membeli produk lokal, Anda turut mendukung perekonomian masyarakat Desa Tangkisan.</p>
        <a href="{{ route('kontak') }}" class="btn-primary-custom">
            Hubungi Kami
        </a>
    </div>
</section>

@endsection
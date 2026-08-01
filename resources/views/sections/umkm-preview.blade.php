<section class="umkm-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">UMKM Desa</span>

            <h2 class="section-title">
                Produk Unggulan Desa Tangkisan
            </h2>

            <p class="section-text mx-auto">
                Produk UMKM khas Desa Tangkisan yang diolah oleh masyarakat sebagai penggerak ekonomi lokal dan memiliki nilai budaya.
            </p>
        </div>

        <div class="row g-4">

            @foreach(array_slice(config('umkm.products'), 0, 3) as $product)

                <div class="col-lg-4 col-md-6">

                    <div class="tour-card">

                        <img
                            src="{{ asset($product['image']) }}"
                            class="img-fluid"
                            alt="{{ $product['name'] }}">

                        <div class="tour-content">

                            <span class="badge bg-success mb-2">
                                {{ $product['category'] }}
                            </span>

                            <h4>{{ $product['name'] }}</h4>

                            <p>
                                {{ $product['short_description'] }}
                            </p>

                            <a href="{{ route('umkm.show', $product['slug']) }}"
                               class="btn-primary-custom mt-2">
                                Lihat Detail
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

        <div class="text-center mt-5">

            <a href="{{ route('umkm') }}" class="btn-primary-custom">
                Lihat Semua Produk
            </a>

        </div>

    </div>
</section>
<section class="wisata-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Wisata Desa</span>

            <h2 class="section-title">
                Destinasi Wisata Tangkisan
            </h2>

            <p class="section-text mx-auto">
                Nikmati keindahan alam Desa Tangkisan dengan suasana sejuk, panorama hijau, dan berbagai destinasi menarik untuk dikunjungi bersama keluarga.
            </p>
        </div>

        <div class="row g-4">

            @foreach(array_slice(config('wisata.places'), 0, 3) as $place)

                <div class="col-lg-4 col-md-6">

                    <div class="tour-card">

                        <img src="{{ asset($place['image']) }}"
                             class="img-fluid"
                             alt="{{ $place['name'] }}">

                        <div class="tour-content">

                            <span class="badge bg-success mb-2">
                                {{ $place['category'] }}
                            </span>

                            <h4>{{ $place['name'] }}</h4>

                            <p>{{ $place['short_description'] }}</p>

                            <a href="{{ route('wisata.show', $place['slug']) }}"
                               class="btn-primary-custom mt-2">
                                Lihat Detail
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('wisata') }}" class="btn-primary-custom">
                Lihat Semua Wisata
            </a>
        </div>

    </div>
</section>
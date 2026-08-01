{{-- Berita Terbaru --}}
<section class="news-section bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Berita Desa</span>

            <h2 class="section-title">
                Berita Terbaru Desa Tangkisan
            </h2>

            <p class="section-text mx-auto">
                Ikuti informasi terbaru mengenai kegiatan, pembangunan, pelayanan, dan aktivitas masyarakat Desa Tangkisan.
            </p>
        </div>

        <div class="row g-4">

            @foreach(array_slice(config('berita.posts'), 0, 2) as $post)

                <div class="col-lg-6">
                    <div class="news-card">

                        <img src="{{ asset($post['image']) }}"
                            class="img-fluid"
                            alt="{{ $post['title'] }}">

                        <div class="news-content">

                            <span class="news-date">
                                <i class="bi bi-calendar-event"></i>
                                {{ $post['date'] }}
                            </span>

                            <h4>{{ $post['title'] }}</h4>

                            <p>{{ $post['short_description'] }}</p>

                            <a href="{{ route('berita.show', $post['slug']) }}"
                                class="btn-primary-custom">
                                Baca Selengkapnya
                            </a>

                        </div>

                    </div>
                </div>

            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('berita') }}" class="btn-primary-custom">
                Lihat Semua Berita
            </a>
        </div>

    </div>
</section>
<section id="statistik" class="stats-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Statistik Desa</span>
            <h2 class="section-title">Data Desa Tangkisan</h2>
            <p class="section-text mx-auto">
                Ringkasan data kependudukan dan potensi Desa Tangkisan.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-people-fill stat-icon"></i>
                    <h3>{{ number_format(config('demografi.summary.population'),0,',','.') }}</h3>
                    <span>Jumlah Penduduk</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-house-door-fill stat-icon"></i>
                    <h3>{{ number_format(config('demografi.summary.family'),0,',','.') }}</h3>
                    <span>Kepala Keluarga</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-diagram-3-fill stat-icon"></i>
                    <h3>{{ config('demografi.summary.dusun') }}</h3>
                    <span>Dusun</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-signpost-split-fill stat-icon"></i>
                    <h3>{{ config('demografi.summary.rt') }}</h3>
                    <span>RT</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-building-fill stat-icon"></i>
                    <h3>{{ config('demografi.summary.rw') }}</h3>
                    <span>RW</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-shop stat-icon"></i>
                    <h3>{{ config('demografi.summary.umkm') }}</h3>
                    <span>UMKM</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-camera-fill stat-icon"></i>
                    <h3>{{ config('demografi.summary.tourism') }}</h3>
                    <span>Wisata</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-card">
                    <i class="bi bi-building stat-icon"></i>
                    <h3>{{ config('demografi.summary.office') }}</h3>
                    <span>Kantor Desa</span>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="demografi-preview py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Demografi Desa</span>
            <h2 class="section-title">Data dan Analisis Demografi</h2>
            <p class="section-text mx-auto" style="max-width:700px;">
                Perkembangan kependudukan Desa Tangkisan dari beberapa tahun terakhir sebagai dasar perencanaan pembangunan berbasis data.
            </p>
        </div>

        <div class="row g-4 align-items-center">

            <div class="col-lg-7">

                <div class="chart-card">
                    <h4>Perkembangan Jumlah Penduduk</h4>

                    <div class="chart-sm">
                        <canvas id="previewDemografiChart"></canvas>
                    </div>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="row g-3">

                    <div class="col-6">
                        <div class="mini-stat-card">
                            <h3>{{ number_format(config('demografi.summary.population'),0,',','.') }}</h3>
                            <span>Jumlah Penduduk</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mini-stat-card">
                            <h3>{{ number_format(config('demografi.summary.family'),0,',','.') }}</h3>
                            <span>Kepala Keluarga</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mini-stat-card">
                            <h3>{{ config('demografi.summary.productive_age') }}%</h3>
                            <span>Usia Produktif</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mini-stat-card">
                            <h3>{{ config('demografi.summary.umkm') }}</h3>
                            <span>UMKM Aktif</span>
                        </div>
                    </div>

                </div>

                <p class="section-text mt-4">
                    Lihat grafik lengkap, komposisi penduduk, mata pencaharian, tingkat pendidikan, serta hasil analisis perkembangan demografi Desa Tangkisan.
                </p>

                <a href="{{ route('demografi') }}" class="btn-primary-custom mt-3">
                    Lihat Analisis
                </a>

            </div>

        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const canvas = document.getElementById("previewDemografiChart");

    if (!canvas) return;

    new Chart(canvas, {
        type: "line",
        data: {
            labels: @json(config('demografi.population_chart.labels')),
            datasets: [{
                label: "Jumlah Penduduk",
                data: @json(config('demografi.population_chart.data')),
                borderColor: "#1f5e3b",
                backgroundColor: "rgba(31,94,59,.12)",
                fill: true,
                tension: .4,
                pointRadius: 5,
                pointBackgroundColor: "#1f5e3b"
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });

});
</script>
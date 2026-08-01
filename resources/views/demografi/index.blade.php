@extends('layouts.app')

@section('title', 'Demografi Desa')

@section('content')

<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">Demografi Desa</span>
        <h1 class="page-title">Data Demografi Desa Tangkisan</h1>
        <p class="page-subtitle">
            Analisis perkembangan kependudukan sebagai dasar penyusunan kebijakan pembangunan desa berbasis data.
        </p>
    </div>
</section>

<section class="demografi-section py-5">
    <div class="container">

        <div class="row g-4 mb-5">

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>{{ number_format(config('demografi.summary.population'),0,',','.') }}</h3>
                    <span>Jumlah Penduduk</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-house-door-fill"></i>
                    </div>
                    <h3>{{ number_format(config('demografi.summary.family'),0,',','.') }}</h3>
                    <span>Kepala Keluarga</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-buildings-fill"></i>
                    </div>
                    <h3>{{ config('demografi.summary.dusun') }}</h3>
                    <span>Dusun</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-diagram-3-fill"></i>
                    </div>
                    <h3>{{ config('demografi.summary.rt') }}</h3>
                    <span>RT</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-building-fill"></i>
                    </div>
                    <h3>{{ config('demografi.summary.rw') }}</h3>
                    <span>RW</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-shop"></i>
                    </div>
                    <h3>{{ config('demografi.summary.umkm') }}</h3>
                    <span>UMKM Aktif</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-tree-fill"></i>
                    </div>
                    <h3>{{ config('demografi.summary.tourism') }}</h3>
                    <span>Potensi Wisata</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <h3>{{ config('demografi.summary.productive_age') }}%</h3>
                    <span>Usia Produktif</span>
                </div>
            </div>

        </div>

        <div class="row g-4 mb-4">

            <div class="col-lg-8">
                <div class="chart-card">
                    <h4>Perkembangan Jumlah Penduduk</h4>
                    <div class="chart-lg">
                        <canvas id="populationChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="chart-card">
                    <h4>Komposisi Umur</h4>
                    <div class="chart-sm">
                        <canvas id="ageChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="chart-card">
                    <h4>Mata Pencaharian Penduduk</h4>
                    <div class="chart-md">
                        <canvas id="jobChart"></canvas>
                    </div>
                </div>
            </div>

        </div>

        @php
            $analysis = config('demografi.analysis');
        @endphp

        <div class="chart-card">
            <h4>{{ $analysis['title'] }}</h4>

            <small class="text-muted d-block mb-3">
                {{ $analysis['period'] }}
            </small>

            <p class="section-text">
                {{ $analysis['description'] }}
            </p>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
new Chart(document.getElementById('populationChart'), {
    type: 'line',
    data: {
        labels: @json(config('demografi.population_chart.labels')),
        datasets: [{
            label: 'Jumlah Penduduk',
            data: @json(config('demografi.population_chart.data')),
            borderColor: '#1f5e3b',
            backgroundColor: 'rgba(31,94,59,.12)',
            fill: true,
            tension: .35
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

new Chart(document.getElementById('ageChart'), {
    type: 'doughnut',
    data: {
        labels: @json(config('demografi.age_chart.labels')),
        datasets: [{
            data: @json(config('demografi.age_chart.data')),
            backgroundColor: [
                '#4CAF50',
                '#1f5e3b',
                '#f4a340'
            ],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});

new Chart(document.getElementById('jobChart'), {
    type: 'bar',
    data: {
        labels: @json(config('demografi.job_chart.labels')),
        datasets: [{
            data: @json(config('demografi.job_chart.data')),
            backgroundColor: '#1f5e3b',
            borderRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        }
    }
});
</script>

@endsection
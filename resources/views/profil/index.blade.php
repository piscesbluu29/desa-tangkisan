@extends('layouts.app')

@section('title', 'Profil Desa')

@section('content')

<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">Profil Desa</span>

        <h1 class="page-title">
            Profil Desa Tangkisan
        </h1>

        <p class="page-subtitle">
            Mengenal sejarah, visi, misi, tujuan pembangunan, dan potensi unggulan Desa Tangkisan, Kecamatan Mrebet, Kabupaten Purbalingga.
        </p>
    </div>
</section>

<section class="about-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/images/about/desa.png') }}" class="img-fluid rounded-4 shadow" alt="Desa Tangkisan">
                </div>
            </div>

            <div class="col-lg-6">

                <span class="section-badge">Profil Desa</span>

                <h2 class="section-title">
                    Tentang Desa Tangkisan
                </h2>

                <p class="section-text">
                    Desa Tangkisan merupakan salah satu desa di Kecamatan Mrebet, Kabupaten Purbalingga. Desa ini memiliki lingkungan yang asri dengan potensi pertanian, UMKM, dan wisata alam yang terus berkembang sebagai penunjang perekonomian masyarakat.
                </p>

                <p class="section-text">
                    Pemerintah Desa Tangkisan berkomitmen memberikan pelayanan publik yang cepat, transparan, dan profesional serta mendorong pembangunan desa secara berkelanjutan melalui pemberdayaan masyarakat, peningkatan kualitas sumber daya manusia, dan pengembangan potensi lokal.
                </p>

            </div>

        </div>

    </div>
</section>

@include('sections.struktur-pemerintah')

<section class="vision-section">
    <div class="container">

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="vision-card">

                    <span class="section-badge">Visi</span>

                    <h3>Visi Desa</h3>

                    <p>
                        "Mewujudkan Masyarakat Desa Tangkisan yang Maju, Mandiri, Berkualitas, Sejahtera, dan Berakhlak Mulia."
                    </p>

                    <p class="mt-3">
                        Visi ini menjadi pedoman pembangunan desa dalam meningkatkan kualitas pelayanan publik, kesejahteraan masyarakat, daya saing desa, serta pembangunan yang berkelanjutan.
                    </p>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="vision-card">

                    <span class="section-badge">Misi</span>

                    <h3>Misi Desa</h3>

                    <ul>
                        <li>Menyelenggarakan pemerintahan yang efisien, efektif, bersih, demokratis, cepat, tepat, dan bermanfaat.</li>
                        <li>Meningkatkan kualitas sumber daya manusia yang beriman, sehat, dan berdaya saing.</li>
                        <li>Mengembangkan perekonomian melalui pertanian, UMKM, peternakan, perikanan, perdagangan, jasa, dan pembangunan infrastruktur.</li>
                        <li>Memberdayakan kelembagaan masyarakat sebagai mitra pembangunan desa.</li>
                        <li>Meningkatkan partisipasi masyarakat dalam seluruh proses pembangunan desa.</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
</section>

<section class="feature-section">
    <div class="container">

        <div class="text-center mb-5">

            <span class="section-badge">Tujuan Pembangunan</span>

            <h2 class="section-title">
                Sasaran Pembangunan Desa
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-building"></i>
                    <h4>Pelayanan Prima</h4>
                    <p>Mewujudkan pelayanan masyarakat yang cepat, tepat, transparan, dan meningkatkan kesejahteraan perangkat desa.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-people-fill"></i>
                    <h4>Masyarakat Berkualitas</h4>
                    <p>Mewujudkan masyarakat yang religius, meningkatkan taraf ekonomi, serta mengurangi angka kemiskinan.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-diagram-3-fill"></i>
                    <h4>Kelembagaan Desa</h4>
                    <p>Meningkatkan kualitas SDM dan kesejahteraan seluruh kelembagaan desa.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-people"></i>
                    <h4>Gotong Royong</h4>
                    <p>Membangkitkan kembali budaya gotong royong sebagai kekuatan pembangunan desa.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h4>Inovasi Desa</h4>
                    <p>Mendorong masyarakat yang kreatif, mandiri, dan mampu bersaing melalui inovasi.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-graph-up-arrow"></i>
                    <h4>Potensi Unggulan</h4>
                    <p>Mengembangkan seluruh potensi desa agar memberikan manfaat bagi kesejahteraan masyarakat.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="feature-section bg-light">
    <div class="container">

        <div class="text-center mb-5">

            <span class="section-badge">Potensi Desa</span>

            <h2 class="section-title">
                Potensi Unggulan Desa Tangkisan
            </h2>

            <p class="section-text mx-auto">
                Desa Tangkisan memiliki berbagai potensi yang terus dikembangkan sebagai penggerak pembangunan dan perekonomian masyarakat.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-tree-fill"></i>
                    <h4>Pertanian</h4>
                    <p>Pertanian menjadi sektor utama yang menopang kehidupan masyarakat desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-shop"></i>
                    <h4>UMKM</h4>
                    <p>Produk lokal dan usaha masyarakat terus berkembang sebagai penggerak ekonomi desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-camera-fill"></i>
                    <h4>Wisata</h4>
                    <p>Potensi wisata alam menjadi daya tarik yang mendukung sektor pariwisata desa.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <i class="bi bi-buildings-fill"></i>
                    <h4>Pelayanan</h4>
                    <p>Pemerintah desa terus meningkatkan kualitas pelayanan publik berbasis digital.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="stats-section">
    <div class="container">

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <h2>3.245</h2>
                    <p>Jumlah Penduduk</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <h2>1.082</h2>
                    <p>Kepala Keluarga</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <h2>14</h2>
                    <p>RT / RW</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stat-card">
                    <h2>8</h2>
                    <p>Potensi Wisata</p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
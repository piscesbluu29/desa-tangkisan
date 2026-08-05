@extends('layouts.app')

@section('title','Kontak Desa')

@section('content')

<section class="page-banner">
    <div class="container text-center">
        <span class="section-badge">Hubungi Kami</span>
        <h1 class="page-title">Layanan Pengaduan</h1>
        <p class="page-subtitle">
            Sampaikan pertanyaan, saran, maupun pengaduan kepada Pemerintah Desa Tangkisan.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">

                        <h3 class="mb-4">
                            Kontak Desa
                        </h3>

                        <div class="mb-3">
                            <strong>WhatsApp</strong><br>
                            0812-3456-7890
                        </div>

                        <div class="mb-3">
                            <strong>Email</strong><br>
                            desatangkisan@gmail.com
                        </div>

                        <div class="mb-3">
                            <strong>Alamat</strong><br>
                            Kantor Desa Tangkisan,
                            Kecamatan Mrebet,
                            Kabupaten Purbalingga
                        </div>

                        <div class="mb-4">
                            <strong>Jam Pelayanan</strong><br>
                            Senin - Jumat<br>
                            08.00 - 15.00 WIB
                        </div>

                        <a href="https://wa.me/6281234567890"
                           target="_blank"
                           class="btn btn-success">
                            <i class="bi bi-whatsapp me-2"></i>
                            Chat WhatsApp
                        </a>

                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-2">

                        <iframe
                            src="https://www.google.com/maps?q=Desa+Tangkisan+Mrebet+Purbalingga&output=embed"
                            width="100%"
                            height="450"
                            style="border:0;"
                            loading="lazy">
                        </iframe>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
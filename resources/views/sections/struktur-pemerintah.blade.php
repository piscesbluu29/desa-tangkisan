@php
    $struktur = config('profil.organization');
@endphp

<section class="structure-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-badge">Pemerintahan Desa</span>
            <h2 class="section-title">Struktur Organisasi Pemerintah Desa</h2>
            <p class="section-text">
                Struktur organisasi Pemerintah Desa Tangkisan Kecamatan Mrebet Kabupaten Purbalingga.
            </p>
        </div>

        <div class="org-chart">

            {{-- Kepala Desa --}}
            <div class="org-level">
                <div class="org-node">

                    <img src="{{ asset($struktur['kepala_desa']['photo']) }}" alt="">

                    <h5>{{ $struktur['kepala_desa']['name'] }}</h5>
                    <span>{{ $struktur['kepala_desa']['position'] }}</span>

                </div>
            </div>

            {{-- BPD & Sekdes --}}
            <div class="org-level two">

                <div class="org-node">

                    <img src="{{ asset($struktur['bpd']['photo']) }}" alt="">

                    <h5>{{ $struktur['bpd']['name'] }}</h5>
                    <span>{{ $struktur['bpd']['position'] }}</span>

                </div>

                <div class="org-node">

                    <img src="{{ asset($struktur['sekretaris']['photo']) }}" alt="">

                    <h5>{{ $struktur['sekretaris']['name'] }}</h5>
                    <span>{{ $struktur['sekretaris']['position'] }}</span>

                </div>

            </div>

            {{-- KAUR --}}
            <div class="org-level three">

                @foreach($struktur['kaur'] as $item)

                <div class="org-node">

                    <img src="{{ asset($item['photo']) }}" alt="">

                    <h5>{{ $item['name'] }}</h5>
                    <span>{{ $item['position'] }}</span>

                </div>

                @endforeach

            </div>

            {{-- KASI --}}
            <div class="org-level three">

                @foreach($struktur['kasi'] as $item)

                <div class="org-node">

                    <img src="{{ asset($item['photo']) }}" alt="">

                    <h5>{{ $item['name'] }}</h5>
                    <span>{{ $item['position'] }}</span>

                </div>

                @endforeach

            </div>

            {{-- KADUS --}}
            <div class="org-level five">

                @foreach($struktur['kadus'] as $item)

                <div class="org-node">

                    <img src="{{ asset($item['photo']) }}" alt="">

                    <h5>{{ $item['name'] }}</h5>
                    <span>{{ $item['position'] }}</span>

                </div>

                @endforeach

            </div>

        </div>

    </div>
</section>
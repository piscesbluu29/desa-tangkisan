@extends('layouts.app')

@section('title', 'Desa Tangkisan')

@section('content')
    @include('sections.hero-preview')
    @include('sections.statistik-preview')
    @include('sections.demografi-preview')
    @include('sections.profil-preview')
    @include('sections.wisata-preview')
    @include('sections.umkm-preview')
    @include('sections.berita-preview')
    @include('sections.map-preview')
@endsection
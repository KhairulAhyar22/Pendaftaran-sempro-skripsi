@extends('layout.landingpage.index')
@section('content')
    <div class="bg-contain-screen" style="background-image: url('/Img/2.png'); ">
        @include('layout.landingpage.sectionhome')
        @include('layout.landingpage.sectiondaftar')
        @include('layout.landingpage.sectioninfo')
    </div>
    {{-- @include('layout.landingpage.sectiontentang') --}}
@endsection

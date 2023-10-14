@extends('page.general.login.index')
@section('content')
    
    @include('page.general.login.sectionhome')
    <div class="bg-contain-screen" style="background-image: url('/Img/2.png'); ">
    {{-- @include('page.general.login.sectioninfo') --}}
    @include('page.general.login.sectioninfo1')
    @include('page.general.login.sectiondaftar')
    </div>
    @include('page.general.login.sectiontentang')
@endsection

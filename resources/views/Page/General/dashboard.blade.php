@extends('layout.index')
@section('content')
    <div class="text-center w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        @include('layout.profiledashboard')
        @include('layout.admin')
    </div>
@endsection

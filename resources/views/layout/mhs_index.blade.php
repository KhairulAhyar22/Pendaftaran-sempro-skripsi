<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    @include('layout.mhs_sidebar')
    <div class="">
        @yield('content')    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    {{-- Icon Iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>

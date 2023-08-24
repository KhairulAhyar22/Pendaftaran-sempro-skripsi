<section id="info" class="bg-[#237045] w-screen">
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container py-5 max-w-screen-xl items-center justify-between mx-auto px-3 sm:px-7">
        <p class=" font-semibold text-2xl  text-white py-2 ">Data Pendaftaran</p>
        {{-- <p class=" font-semibold text-2xl  text-white py-2 ">Informasi Jadwal </p> --}}
        {{-- <div class="text-lg  text-green-800 py-2">
            <div class="container flex flex-col gap-5 pb-8 my-3 px-5 mt-5">
                <div class=" bg-white border rounded-lg">
                    <div class="flex flex-col gap-2 p-5 ">
                        @foreach ($proposal as $item)
                            <div class="flex flex-row justify-between items-center">
                                <div class="flex flex-row gap-3 items-center">
                                    <p class="font-semibold">Seminar Proposal</p>
                                    <p class="p-1 bg-red-400 rounded-md text-black">Belum terjadwal</p>
                                </div>
                                <div class="">
                                    <button id="" data-dropdown-toggle="dropdownsempro"
                                        class="inline-flex items-center px-3 py-2 text-sm text-center text-gray-800 border rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 "
                                        type="button">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownsempro"
                                        class="right-0 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-36 ">
                                        <ul class="py-2 text-sm font-medium text-gray-700 "
                                            aria-labelledby="dropdownDefaultButton">
                                            <li>
                                                <a href=""
                                                    class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                    <div class="flex items-center justify-end mx-auto w-28">
                                                        <iconify-icon icon="ic:round-download"
                                                            class="text-[20px] mr-2"></iconify-icon>
                                                        <p class="text-sm">Form</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=""
                                                    class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                    <div class="flex items-center justify-end mx-auto w-28">
                                                        <iconify-icon icon="ic:round-download"
                                                            class="text-[20px] mr-2"></iconify-icon>
                                                        <p class="text-sm">Undangan </p>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>




                                </div>

                            </div>
                            <div class="border rounded-lg p-2">
                                <div class="grid font-semibold grid-rows-4 grid-flow-col gap-4">
                                    <p>Nama : {{ $item->nama_mahasiswa }}</p>
                                    <p>NIM : {{ $item->nim }}</p>
                                    <p>Judul Proposal : {{ $item->judul_proposal }}</p>
                                    <p>Jadwal Seminar Proposal : -</p>
                                    <p>Tempat : </p>
                                    <p>Ketua Tim Penguji :</p>
                                    <p>Dosen Penguji :</p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class=" bg-white border rounded-lg">
                    <div class="flex flex-col gap-2 p-5 ">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row gap-3 items-center">
                                <p class="font-semibold">Ujian Skripsi</p>
                                <p class="p-1 bg-red-400 rounded-md text-black">Belum terjadwal</p>
                            </div>
                            <div class="">
                                <button id="" data-dropdown-toggle="dropdown2"
                                    class="inline-flex items-center px-3 py-2 text-sm text-center text-gray-800 border rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 "
                                    type="button">
                                    <i class="fas fa-bars"></i>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownskripsi"
                                    class="right-0 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-36 ">
                                    <ul class="py-2 text-sm font-medium text-gray-700 "
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href=""
                                                class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                <div class="flex items-center justify-end mx-auto w-28">
                                                    <iconify-icon icon="ic:round-download"
                                                        class="text-[20px] mr-2"></iconify-icon>
                                                    <p class="text-sm">Form2</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                <div class="flex items-center justify-end mx-auto w-28">
                                                    <iconify-icon icon="ic:round-download"
                                                        class="text-[20px] mr-2"></iconify-icon>
                                                    <p class="text-sm">Undangan </p>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg p-2">
                            <div class="grid font-semibold grid-rows-4 grid-flow-col gap-4">
                                <p>Nama : aesfdghjklhgfdsfghjk</p>
                                <p>NIM :1324576</p>
                                <p>Jadwal Ujian Skripsi :</p>
                                <p>Tempat :</p>
                                <p>Ketua Tim Penguji :</p>
                                <p>Dosen Penguji :</p>
                                <p>Dosen Penguji :</p>
                                <p>Dosen Penguji :</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        <div class="bg-white border rounded-lg mt-5 p-5">

            @foreach ($proposal as $data)
                <div class="flex w-full">
                    <div class="w-full rounded-lg border-b-3">

                        <div class="px-8 py-3 rounded-t-lg bg-emerald-700">
                            <h3 class="text-lg font-medium text-white">Daftar Proposal</h3>
                        </div>
                        <div class="flex justify-between  mt-5 ">
                            @if ($data->status == 'Terbuat')
                                <div class="flex items-center text-slate-800 rounded-3xl px-5 py-1 bg-slate-300">
                                    <iconify-icon icon="carbon:incomplete-cancel" class="text-pink-smooth"
                                        width="22" height="20"></iconify-icon>
                                    </iconify-icon>
                                    <p class="ml-1 text-sm ">Menunggu Verifikasi</p>
                                </div>
                            @endif
                            @if ($data->status == 'Terverifikasi')
                                <div class="flex text-green-950 items-center rounded-3xl px-4 py-1 bg-green-300">
                                    <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                        width="22" height="20">
                                    </iconify-icon>
                                    <p class="ml-2 text-sm">Layak</p>
                                </div>
                            @endif
                            <div>
                                <button id="{{ $data->id }}" data-dropdown-toggle="dropdown{{ $data->id }}"
                                    class="text-gray-800 border hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 
                                            4.001A2 2 0 0 0 12 10z" />
                                    </svg>
                                    <!-- <iconify-icon icon="ooui:ellipsis" class="text-xl"></iconify-icon> -->
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown{{ $data->id }}"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 right-0">
                                    <ul class="py-2 text-sm font-medium text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href=""
                                                class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                <div class="flex items-center justify-end mx-auto w-28">
                                                    <iconify-icon icon="ic:round-download"
                                                        class="text-[20px] mr-2"></iconify-icon>
                                                    <p class="text-sm">Form</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                <div class="flex items-center justify-end mx-auto w-28">
                                                    <iconify-icon icon="ic:round-download"
                                                        class="text-[20px] mr-2"></iconify-icon>
                                                    <p class="text-sm">Undangan </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="py-6 lg:py-6 ">
                            <div class="grid grid-cols-1 mb-0 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Nama
                                            Mahasiswa : </h3>
                                        <p>{{ $data->nama_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">NIM
                                            :
                                        </h3>
                                        <p>{{ $data->nim }}</p>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Status
                                            Status Mahasiswa :
                                        </h3>
                                        <p>{{ $data->status_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Jenis
                                            Kelamin : </h3>
                                        <p>{{ $data->jenis_kelamin }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Judul
                                            Proposal : </h3>
                                        <p>{{ $data->judul_proposal }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Utama : </h3>
                                        <p>{{ $data->pembimbing1 }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Kedua : </h3>
                                        <p>{{ $data->pembimbing2 }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">TGL
                                            ACC
                                            Pembimbing Utama : </h3>
                                        <p>{{ Carbon::parse($data->tgl_accp1)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">TGL
                                            ACC
                                            Pembimbing Kedua : </h3>
                                        <p>{{ Carbon::parse($data->tgl_accp2)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">No
                                            HP :
                                        </h3>
                                        <p>{{ $data->no_hp }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">TGL Terbuat :
                                        </h3>
                                        <p>{{ Carbon::parse($data->created_at)->locale('id')->isoFormat('dddd, D MMMM [jam:]H:mm:ss') }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="relative mb-3 overflow-x-auto">
                                <h3 class="my-4 text-lg font-medium">Kelengkapan Dokumen</h3>
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <tr>
                                            <th scope="col" class="px-4 py-4 font-medium">
                                                KRS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Proposal
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Kartu Konsul
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                KHS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Ket. Lunas SPP
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Slip Pembayaran
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> --}}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="bg-white border rounded-lg mt-5 p-5">

            {{-- Daftaar Skripsi --}}
            @foreach ($proposal as $data)
                <div class="flex w-full">
                    <div class="w-full rounded-lg border-b-3">

                        <div class="px-8 py-3 rounded-t-lg bg-emerald-700">
                            <h3 class="text-lg font-medium text-white">Daftar Skripsi</h3>
                        </div>
                        <div class="p-6 lg:p-6 ">
                            <div class="flex justify-start mb-10 ">
                                @if ($data->status == 'Terbuat')
                                    <div class="flex items-center text-slate-800 rounded-3xl px-5 py-1 bg-slate-300">
                                        <iconify-icon icon="carbon:incomplete-cancel" class="text-pink-smooth"
                                            width="22" height="20"></iconify-icon>
                                        </iconify-icon>
                                        <p class="ml-1 text-sm ">Menunggu Verifikasi</p>
                                    </div>
                                @endif
                                @if ($data->status == 'Terverifikasi')
                                    <div class="flex text-green-950 items-center rounded-3xl px-4 py-1 bg-green-300">
                                        <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                            width="22" height="20">
                                        </iconify-icon>
                                        <p class="ml-2 text-sm">Layak</p>
                                    </div>
                                @endif
                            </div>
                            <div class="grid grid-cols-1 mb-0 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Nama
                                            Mahasiswa : </h3>
                                        <p>{{ $data->nama_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">NIM
                                            :
                                        </h3>
                                        <p>{{ $data->nim }}</p>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Status
                                            Status Mahasiswa :
                                        </h3>
                                        <p>{{ $data->status_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Jenis
                                            Kelamin : </h3>
                                        <p>{{ $data->jenis_kelamin }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Judul
                                            Proposal : </h3>
                                        <p>{{ $data->judul_proposal }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Utama : </h3>
                                        <p>{{ $data->pembimbing1 }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Kedua : </h3>
                                        <p>{{ $data->pembimbing2 }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">TGL
                                            ACC
                                            Pembimbing Utama : </h3>
                                        <p>{{ Carbon::parse($data->tgl_accp1)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">
                                            TGL
                                            ACC
                                            Pembimbing Kedua : </h3>
                                        <p>{{ Carbon::parse($data->tgl_accp2)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block text-base font-semibold text-gray-900 dark:text-white">No
                                            HP :
                                        </h3>
                                        <p>{{ $data->no_hp }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="relative mb-3 overflow-x-auto">
                                <h3 class="my-4 text-lg font-medium">Kelengkapan Dokumen</h3>
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <tr>
                                            <th scope="col" class="px-4 py-4 font-medium">
                                                KRS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Proposal
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Kartu Konsul
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                KHS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Ket. Lunas SPP
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Slip Pembayaran
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> --}}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

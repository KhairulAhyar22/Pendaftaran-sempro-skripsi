<section id="info" class=" w-screen">
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container py-5 max-w-screen-xl items-center justify-between mx-auto px-3 sm:px-7">
        <p class=" font-semibold text-2xl  text-white py-2 ">Data Pendaftaran</p>

        <div class="bg-white border rounded-lg mt-5 p-5">

            @if (count($proposal) === 0)
                <div class="flex w-full">
                    <div class="w-full rounded-lg border-b-3">
                        <div class="p-8 py-3 rounded-t-lg bg-emerald-700">
                            <h3 class="text-lg font-medium text-white text-center">Proposal</h3>
                        </div>
                        <p class="my-5 text-center">Data daftar seminar proposal belum dibuat, silahkan lakukan
                            pendaftaran
                            terlebih dahulu</p>
                    </div>

                </div>
            @else
                @foreach ($proposal as $data)
                    <div class="flex w-full">
                        <div class="w-full rounded-lg border-b-3">
                            <div class="px-8 py-3 rounded-t-lg bg-emerald-700">
                                <h3 class="text-lg font-medium text-white text-center">Proposal </h3>
                            </div>
                            <div class="flex justify-between  mt-5 ">
                                <div class="">
                                    @if ($data->status == 'Terbuat')
                                        <div
                                            class="flex items-center text-slate-800 rounded-3xl px-5 py-1.5 bg-slate-300">
                                            <iconify-icon icon="carbon:incomplete-cancel" class="text-pink-smooth"
                                                width="22" height="20"></iconify-icon>
                                            <p class="ml-1 text-sm">Menunggu Verifikasi</p>
                                        </div>
                                    @elseif ($data->status == 'Terverifikasi')
                                        <div
                                            class="flex text-green-950 items-center rounded-3xl px-4 py-1.5 bg-green-300">
                                            <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                                width="22" height="20"></iconify-icon>
                                            <p class="ml-2 text-sm">Menunggu Jadwal</p>
                                        </div>
                                    @elseif ($data->status == 'Terjadwal')
                                        <div class="flex text-red-950 items-center rounded-3xl px-4 py-1.5 bg-red-300">
                                            <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                                width="22" height="20"></iconify-icon>
                                            <p class="ml-2 text-sm">{{ $data->status }}</p>
                                        </div>
                                    @elseif ($data->status == 'Selesai')
                                        <div
                                            class="flex text-green-50 items-center rounded-3xl px-4 py-1.5 bg-green-700">
                                            <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                                width="22" height="20"></iconify-icon>
                                            <p class="ml-2 text-sm">Selamat telah seminar proposal</p>
                                        </div>
                                    @endif


                                </div>
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
                                            @if ($data->status_dok == 'Belum Lengkap')
                                                <li>
                                                    <a href="/proposal/create/dokumentpersyaratan/{{ $data->id }}"
                                                        class="block px-4 py-[7px] text-green-500 hover:bg-gray-100  justify-end"
                                                        target="_blank">
                                                        <div class="flex items-center justify-end mx-auto w-28">
                                                            <iconify-icon icon="tabler:edit" class="text-[18px] mr-2">
                                                            </iconify-icon>
                                                            <p class="text-sm">Lengkapi</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                            <li>
                                                <a href="/proposal/hasilformproposal/{{ $data->id }}"
                                                    class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end"
                                                    target="_blank">
                                                    <div class="flex items-center justify-end mx-auto w-28">
                                                        <iconify-icon icon="ic:round-download"
                                                            class="text-[20px] mr-2"></iconify-icon>
                                                        <p class="text-sm">Form</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                @if ($data->id_jadwal)
                                                    <a href="/jadwal/seminarproposal/download/{{ $data->id_jadwal }}"
                                                        class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end"
                                                        target="_blank">
                                                        <div class="flex items-center justify-end mx-auto w-28">
                                                            <iconify-icon icon="ic:round-download"
                                                                class="text-[20px] mr-2"></iconify-icon>
                                                            <p class="text-sm">Undangan </p>
                                                        </div>
                                                    </a>
                                                @else
                                                    <button
                                                        onclick="return alert('Anda Belu Dijadwalkan seminar proposal, mohon tunggu atau hubungi staff prodi!')"
                                                        class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end"
                                                        target="_blank">
                                                        <div class="flex items-center justify-end mx-auto w-28">
                                                            <iconify-icon icon="ic:round-download"
                                                                class="text-[20px] mr-2"></iconify-icon>
                                                            <p class="text-sm">Undangan </p>
                                                        </div>
                                                    </button>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start">
                                @if ($data->status_dok == 'Belum Lengkap')
                                    <p class="ml-1 text-sm text-orange-700 italic">Dokument Belum Lengkap</p>
                                @endif
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

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="relative mb-10 overflow-x-auto">
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
                            <tbody>
                                <tr
                                    class="text-left bg-white border-b text-slate-700 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-4 py-4">
                                        <a href="/Dokument/Proposal/KRS/{{ $data->file_krs }}" target="_blank"
                                            class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_krs ? $data->file_krs : '-' }}</a>
                                    </th>
                                    <td class="px-4 py-4">
                                        <a href="/Dokument/Proposal/Proposal/{{ $data->file_proposal }}"
                                            target="_blank"
                                            class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_proposal ? $data->file_proposal : '-' }}</a>
                                    </td>
                                    <td class="px-4 py-4">
                                        <a href="/Dokument/Proposal/KartuKonsul/{{ $data->file_kartu_konsul }}"
                                            target="_blank"
                                            class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_kartu_konsul ? $data->file_kartu_konsul : '-' }}</a>
                                    </td>
                                    <td class="px-4 py-4">
                                        <a href="/Dokument/Proposal/KHS/{{ $data->file_khs }}" target="_blank"
                                            class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_khs ? $data->file_khs : '-' }}</a>
                                    </td>
                                    <td class="px-4 py-4">
                                        <a href="/Dokument/Proposal/LunasSPP/{{ $data->file_lunas_spp }}"
                                            target="_blank"
                                            class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_lunas_spp ? $data->file_lunas_spp : '-' }}</a>
                                    </td>
                                    <td class="px-4 py-4">
                                        <a href="/Dokument/Proposal/SlipPembayaran/{{ $data->file_slip_pembayaran }}"
                                            target="_blank"
                                            class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_slip_pembayaran ? $data->file_slip_pembayaran : '-' }}</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="bg-white border rounded-lg mt-5 p-5">
            @if ($statusSempro == 'Selesai')
                @if (count($skripsi) === 0)
                    <div class="flex w-full">
                        <div class="w-full rounded-lg border-b-3">
                            <div class="p-8 py-3 rounded-t-lg bg-emerald-700">
                                <h3 class="text-lg font-medium text-white text-center">Skripsi</h3>
                            </div>
                            <p class="my-5 text-center">Data Ujian Skripsi belum dibuat, silahkan lakukan
                                pendaftaran
                                terlebih dahulu</p>
                        </div>
                    </div>
                @else
                    @foreach ($skripsi as $data)
                        <div class="flex w-full">
                            <div class="w-full rounded-lg border-b-3">

                                <div class="px-8 py-3 rounded-t-lg bg-emerald-700">
                                    <h3 class="text-lg font-medium text-white text-center">Skripsi </h3>
                                </div>
                                <div class="flex justify-between  mt-5 ">
                                    <div class="">
                                        @if ($data->status == 'Terbuat')
                                            <div
                                                class="flex items-center text-slate-800 rounded-3xl px-5 py-1.5 bg-slate-300">
                                                <iconify-icon icon="carbon:incomplete-cancel" class="text-pink-smooth"
                                                    width="22" height="20"></iconify-icon>
                                                <p class="ml-1 text-sm">Menunggu Verifikasi</p>
                                            </div>
                                        @elseif ($data->status == 'Terverifikasi')
                                            <div
                                                class="flex text-green-950 items-center rounded-3xl px-4 py-1.5 bg-green-300">
                                                <iconify-icon icon="material-symbols:check-circle-rounded"
                                                    class="" width="22" height="20"></iconify-icon>
                                                <p class="ml-2 text-sm">Menunggu Jadwal</p>
                                            </div>
                                        @elseif ($data->status == 'Terjadwal')
                                            <div
                                                class="flex text-red-950 items-center rounded-3xl px-4 py-1.5 bg-red-300">
                                                <iconify-icon icon="material-symbols:check-circle-rounded"
                                                    class="" width="22" height="20"></iconify-icon>
                                                <p class="ml-2 text-sm">{{ $data->status }}</p>
                                            </div>
                                        @elseif ($data->status == 'Selesai')
                                            <div
                                                class="flex text-green-50 items-center rounded-3xl px-4 py-1.5 bg-green-700">
                                                <iconify-icon icon="material-symbols:check-circle-rounded"
                                                    class="" width="22" height="20"></iconify-icon>
                                                <p class="ml-2 text-sm">Selamat telah Ujian Skripsi</p>
                                            </div>
                                        @endif


                                    </div>
                                    <div>
                                        <button id="{{ $data->id }}"
                                            data-dropdown-toggle="dropdown{{ $data->id }}"
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
                                                @if ($data->status_dok == 'Belum Lengkap')
                                                    <li>
                                                        <a href="/proposal/create/dokumentpersyaratan/{{ $data->id }}"
                                                            class="block px-4 py-[7px] text-green-500 hover:bg-gray-100  justify-end"
                                                            target="_blank">
                                                            <div class="flex items-center justify-end mx-auto w-28">
                                                                <iconify-icon icon="tabler:edit"
                                                                    class="text-[18px] mr-2">
                                                                </iconify-icon>
                                                                <p class="text-sm">Lengkapi</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endif
                                                <li>
                                                    <a href="/skripsi/hasilformskripsi/{{ $data->id }}"
                                                        class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end"
                                                        target="_blank">
                                                        <div class="flex items-center justify-end mx-auto w-28">
                                                            <iconify-icon icon="ic:round-download"
                                                                class="text-[20px] mr-2"></iconify-icon>
                                                            <p class="text-sm">Form</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    @if ($data->id_jadwal)
                                                        <a href="/jadwal/ujianskripsi/download/{{ $data->id_jadwal }}"
                                                            class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end"
                                                            target="_blank">
                                                            <div class="flex items-center justify-end mx-auto w-28">
                                                                <iconify-icon icon="ic:round-download"
                                                                    class="text-[20px] mr-2"></iconify-icon>
                                                                <p class="text-sm">Undangan Skripsi </p>
                                                            </div>
                                                        </a>
                                                    @else
                                                        <button
                                                            onclick="return alert('Anda Belu Dijadwalkan seminar proposal, mohon tunggu atau hubungi staff prodi!')"
                                                            class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100  justify-end">
                                                            <div class="flex items-center justify-end mx-auto w-28">
                                                                <iconify-icon icon="ic:round-download"
                                                                    class="text-[20px] mr-2"></iconify-icon>
                                                                <p class="text-sm">Undangan </p>
                                                            </div>
                                                        </button>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-start">
                                    @if ($data->status_dok == 'Belum Lengkap')
                                        <p class="ml-1 text-sm text-orange-700 italic">Dokument Belum Lengkap</p>
                                    @endif
                                </div>
                                <div class="py-6 lg:py-6 ">
                                    <div class="grid grid-cols-1 mb-0 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">
                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Nama
                                                    Mahasiswa : </h3>
                                                <p>{{ $data->nama_mahasiswa }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">
                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    NIM
                                                    :
                                                </h3>
                                                <p>{{ $data->nim }}</p>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Status Mahasiswa :
                                                </h3>
                                                <p>{{ $data->status_mahasiswa }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">
                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Jenis
                                                    Kelamin : </h3>
                                                <p>{{ $data->jenis_kelamin }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Judul
                                                    Skripsi : </h3>
                                                <p>{{ $data->judul_skripsi }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Pembimbing Utama : </h3>
                                                <p>{{ $data->pembimbing1 }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Pembimbing Kedua : </h3>
                                                <p>{{ $data->pembimbing2 }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    TGL
                                                    Tanggal ACC Proposal : </h3>
                                                <p>{{ Carbon::parse($data->tglacc_proposal)->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    No
                                                    HP :
                                                </h3>
                                                <p>{{ $data->no_hp }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Screenshoot Uji Similarity :
                                                </h3>
                                                <a href="/Dokument/Skripsi/UjiSimilarity/{{ $data->uji_similarity }}"
                                                    target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->uji_similarity ? $data->uji_similarity : '-' }}</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="relative mb-10 overflow-x-auto">
                            <h3 class="my-4 text-lg font-medium">Kelengkapan Dokumen</h3>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                    <tr>
                                        <th scope="col" class="px-4 py-4 font-medium">
                                            Skripsi
                                        </th>
                                        <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                            Kartu Konsul/Bukti ACC
                                        </th>
                                        <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                            SPUS
                                        </th>
                                        <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                            Pengesahan Proposal
                                        </th>
                                        <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                            KRS
                                        </th>
                                        <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                            KTM
                                        </th>
                                        <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                            Bukti Lunas SPP
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="text-left bg-white border-b text-slate-700 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-4 py-4">
                                            <a href="/UjianSkripsi/Skripsi/{{ $data->file_skripsi }}" target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_skripsi ? $data->file_skripsi : '-' }}</a>
                                        </th>
                                        <td class="px-4 py-4">
                                            <a href="/UjianSkripsi/BuktiACC/{{ $data->file_bukti_acc }}"
                                                target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_bukti_acc ? $data->file_bukti_acc : '-' }}</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <a href="/UjianSkripsi/SPUS{{ $data->file_spus }}" target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_spus ? $data->file_spus : '-' }}</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <a href="/UjianSkripsi/PengesahanProposal{{ $data->file_pengesahan_proposal }}"
                                                target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_pengesahan_proposal ? $data->file_pengesahan_proposal : '-' }}</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <a href="/UjianSkripsi/KRS{{ $data->file_krs }}" target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_krs ? $data->file_krs : '-' }}</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <a href="/UjianSkripsi/KTM{{ $data->file_ktm }}" target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_ktm ? $data->file_ktm : '-' }}</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <a href="/UjianSkripsi/BuktiLunasSPP{{ $data->file_bukti_lunasspp }}"
                                                target="_blank"
                                                class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_bukti_lunasspp ? $data->file_bukti_lunasspp : '-' }}</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
        <div class="bg-white border rounded-lg mt-5 p-5">
            @if ($statusSkripsi == 'Selesai')
                @if (count($yudisium) == 0)
                    <div class="flex w-full">
                        <div class="w-full rounded-lg border-b-3">
                            <div class="p-8 py-3 rounded-t-lg bg-emerald-700">
                                <h3 class="text-lg font-medium text-white text-center">Yudisium</h3>
                            </div>
                            <p class="my-5 text-center">Data Yudisium belum dibuat, silahkan lakukan
                                Pendaftaran terlebih dahulu</p>
                        </div>
                    </div>
                @else
                    @foreach ($yudis as $data)
                        <div class="flex w-full">
                            <div class="w-full rounded-lg border-b-3">
                                <div class="px-8 py-3 rounded-t-lg bg-emerald-700">
                                    <h3 class="text-lg font-medium text-white text-center">Yudisium</h3>
                                </div>
                                <div class="py-6 lg:py-6 ">
                                    <div class="flex text-green-50 items-center w-fit rounded-3xl px-4 py-1.5 bg-green-700">
                                        <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                            width="22" height="20"></iconify-icon>
                                        <p class="ml-2 text-sm ">Anda sudah terdaftar, Silahkan menunggu jadwal
                                            yudisium</p>
                                    </div>
                                    <div class="grid grid-cols-1 mb-0 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">
                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Nama
                                                    Mahasiswa : </h3>
                                                <p>{{ $data->nama_mahasiswa }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">
                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    NIM
                                                    :
                                                </h3>
                                                <p>{{ $data->nim }}</p>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Telah Ujian Skripsi
                                                    Tanggal :
                                                </h3>
                                                <p>{{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    Judul
                                                    Skripsi : </h3>
                                                <p>{{ $data->judul_skripsi }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    No
                                                    HP :
                                                </h3>
                                                <p>{{ $data->no_hp }}</p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="flex-col sm:flex md:justify-start">

                                                <h3
                                                    class="block text-base font-semibold text-gray-900 dark:text-white">
                                                    File PPT :
                                                </h3>
                                                <a href="/Yudisium/PPT{{ $data->file_ppt }}" target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $data->file_ppt ? $data->file_ppt : '-' }}</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</section>

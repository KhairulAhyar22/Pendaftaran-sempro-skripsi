@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="container px-7 my-5 mt-10 pb-8">
            <div class="relative overflow-x-auto pb-10 bg-white rounded-lg border">
                <div class="flex w-full">
                    <div class="border-b-3 rounded-lg w-full">

                        <div class="py-3 px-8 bg-emerald-700 rounded-t-lg">
                            <h3 class="text-white font-medium text-lg">Detail Data Daftar Proposal</h3>
                        </div>
                        <div class="lg:p-6 p-6 ">
                            <div class="flex justify-start mb-10 ">
                                @if ($skripsi->status == 'Terbuat')
                                    <div class="flex items-center text-slate-800 rounded-3xl px-5 py-1.5 bg-slate-300">
                                        <iconify-icon icon="carbon:incomplete-cancel" class="text-pink-smooth"
                                            width="22" height="20"></iconify-icon>
                                        </iconify-icon>
                                        <p class="ml-1 text-sm ">Menunggu Verifikasi</p>
                                    </div>
                                @endif
                                @if ($skripsi->status == 'Terverifikasi')
                                    <div class="flex text-green-950 items-center rounded-3xl px-4 py-1.5 bg-green-300">
                                        <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                            width="22" height="20">
                                        </iconify-icon>
                                        <p class="ml-2 text-sm">Terverifikasi</p>
                                    </div>
                                @endif
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:mx-10 gap-7 mb-5 ">
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Nama
                                            Mahasiswa : </h3>
                                        <p>{{ $skripsi->nama_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">NIM :
                                        </h3>
                                        <p>{{ $skripsi->nim }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Status Mahasiswa :
                                        </h3>
                                        <p>{{ $skripsi->status_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Jenis
                                            Kelamin : </h3>
                                        <p>{{ $skripsi->jenis_kelamin }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Judul
                                            Skripsi : </h3>
                                        <p>{{ $skripsi->judul_skripsi }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Utama : </h3>
                                        <p>{{ $skripsi->pembimbing1 }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Kedua : </h3>
                                        <p>{{ $skripsi->pembimbing2 }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">TGL ACC
                                            Proposal </h3>
                                        <p>{{ Carbon\Carbon::parse($skripsi->tglacc_proposal)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">No HP :
                                        </h3>
                                        <p>{{ $skripsi->no_hp }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Dosen
                                            PA :
                                        </h3>
                                        <p>{{ $skripsi->nama_pa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Uji Similarity :
                                        </h3>
                                        <a target="_blank"
                                            href="/Dokument/Skripsi/UjiSimilarity/{{ $skripsi->uji_similarity }}"
                                            class="text-blue-600 hover:font-medium">{{ $skripsi->uji_similarity }}</a>
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
                                                <a href="/UjianSkripsi/Skripsi/{{ $skripsi->file_skripsi }}"
                                                    target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_skripsi ? $skripsi->file_skripsi : '-' }}</a>
                                            </th>
                                            <td class="px-4 py-4">
                                                <a href="/UjianSkripsi/BuktiACC/{{ $skripsi->file_bukti_acc }}"
                                                    target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_bukti_acc ? $skripsi->file_bukti_acc : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/UjianSkripsi/SPUS{{ $skripsi->file_spus }}" target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_spus ? $skripsi->file_spus : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/UjianSkripsi/PengesahanProposal{{ $skripsi->file_pengesahan_proposal }}"
                                                    target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_pengesahan_proposal ? $skripsi->file_pengesahan_proposal : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/UjianSkripsi/KRS{{ $skripsi->file_krs }}" target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_krs ? $skripsi->file_krs : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/UjianSkripsi/KTM{{ $skripsi->file_ktm }}" target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_ktm ? $skripsi->file_ktm : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/UjianSkripsi/BuktiLunasSPP{{ $skripsi->file_bukti_lunasspp }}"
                                                    target="_blank"
                                                    class="font-normal text-blue-700 hover:font-medium hover:text-blue-800">{{ $skripsi->file_bukti_lunasspp ? $skripsi->file_bukti_lunasspp : '-' }}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            @if ($skripsi->status == 'Terverifikasi')
                                <a href="/skripsi/unvetifikasi/{{ $skripsi->id }}"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 
                                                        font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-red-800">
                                    Unverifikasi</a>
                            @else
                                <a href="/skripsi/vetifikasi/{{ $skripsi->id }}"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 
                                                        font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Verifikasi</a>
                            @endif
                            <a
                                href="/skripsi"class="text-white bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 
                                                    font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-slate-800">Kembali
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="container px-7 my-5 mt-10 pb-8">
            <div class="relative overflow-x-auto pb-10 bg-white rounded-lg border">
                <div class="flex w-full">
                    <div class="border-b-3 rounded-lg w-full">

                        <div class="py-3 px-8 bg-emerald-700 mb-10 rounded-t-lg">
                            <h3 class="text-white font-medium text-lg">Detail Data Daftar Proposal</h3>
                        </div>
                        <div class="lg:p-6 p-6 ">
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:mx-10 gap-7 mb-5 ">
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Nama
                                            Mahasiswa : </h3>
                                        <p>{{ $data->nama_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">NIM :
                                        </h3>
                                        <p>{{ $data->nim }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Jenis
                                            Kelamin : </h3>
                                        <p>{{ $data->jenis_kelamin }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Judul
                                            Skripsi : </h3>
                                        <p>{{ $data->judul_skripsi }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Utama : </h3>
                                        <p>{{ $data->pembimbing1 }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Kedua : </h3>
                                        <p>{{ $data->pembimbing2 }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">TGL ACC
                                            Proposal </h3>
                                        <p>{{ Carbon\Carbon::parse($data->tglacc_proposal)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">No HP :
                                        </h3>
                                        <p>{{ $data->no_hp }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Dosen
                                            PA :
                                        </h3>
                                        <p>{{ $data->nama_pa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Status
                                            Dokumen Seminar Proposal :
                                        </h3>
                                        <p>{{ $data->status_dok }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mb-3 overflow-x-auto">
                                <h3 class="my-4 font-medium text-lg">Kelengkapan Dokumen</h3>
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <tr>
                                            <th scope="col" class="px-4 py-4 font-medium">
                                                SKRIPSI
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                BUKTI ACC
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                SPUS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                PENGESAHAN PROPOSAL
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                KRS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                KTM
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                BUKTI LUNAS SPP
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="text-left text-slate-700 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            @if ($dokument != null)
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/Skripsi/{{ $dokument->file_skripsi }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_skripsi }}</a>
                                                </td>
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/BuktiACC/{{ $dokument->file_bukti_acc }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_bukti_acc }}</a>
                                                </td>
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/SPUS/{{ $dokument->file_spus }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_spus }}</a>
                                                </td>
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/PengesahanProposal/{{ $dokument->file_pengesahan_proposal }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_pengesahan_proposal }}</a>
                                                </td>
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/KRS/{{ $dokument->file_krs }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_krs }}</a>
                                                </td>
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/KTM/{{ $dokument->file_ktm }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_ktm }}</a>
                                                </td>
                                                <td class="px-4 py-4">
                                                    <a href="/UjianSkripsi/BuktiLunasSPP/{{ $dokument->file_bukti_lunasspp }}"
                                                        target="_blank"
                                                        class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $dokument->file_bukti_lunasspp }}</a>
                                                </td>
                                            @else
                                                <td class="px-4 py-4">-</td>
                                                <td class="px-4 py-4">-</td>
                                                <td class="px-4 py-4">-</td>
                                                <td class="px-4 py-4">-</td>
                                                <td class="px-4 py-4">-</td>
                                                <td class="px-4 py-4">-</td>
                                                <td class="px-4 py-4">-</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

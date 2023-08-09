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
                                            Proposal : </h3>
                                        <p>{{ $data->judul_proposal }}</p>
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
                                            Pembimbing Utama : </h3>
                                        <p>{{ Carbon\Carbon::parse($data->tgl_accp1)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">TGL ACC
                                            Pembimbing Kedua : </h3>
                                        <p>{{ Carbon\Carbon::parse($data->tgl_accp2)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">No HP :
                                        </h3>
                                        <p>{{ $data->no_hp }}</p>
                                    </div>
                                </div>
                                {{-- <div class="mb-2">
                                    <div class="sm:flex md:justify-start flex-col">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Status
                                            Dokumen Seminar Proposal :
                                        </h3>
                                        <p>{{ $data->status_dok }}</p>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="relative mb-3 overflow-x-auto">
                                <h3 class="my-4 font-medium text-lg">Kelengkapan Dokumen</h3>
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <tr>
                                            <th scope="col" class="px-4 py-4 font-medium">
                                                KRS
                                            </th>
                                            <th scope="col" class="px-4 py-4 font-medium border-l-2 border-gray-200">
                                                Proposal
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="text-left text-slate-700 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row" class="px-4 py-4">
                                                <a href="Dokument/Proposal/KRS/{{ $data->file_krs }}" target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $data->file_krs ? $data->file_krs : '-'}}</a>
                                            </th>
                                            <td class="px-4 py-4">
                                                <a href="Dokument/Proposal/Proposal/{{ $data->file_proposal }}"
                                                    target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $data->file_proposal ? $data->file_proposal : '-' }}</a>
                                            </td>
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

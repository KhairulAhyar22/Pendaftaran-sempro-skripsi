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

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Status Mahasiswa :
                                        </h3>
                                        <p>{{ $data->status_mahasiswa }}</p>
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

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Uji Similarity :
                                        </h3>
                                        <a target="_blank" href="/Dokument/Skripsi/UjiSimilarity/{{ $data->uji_similarity }}"
                                            class="text-blue-600 hover:font-medium">{{ $data->uji_similarity }}</a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

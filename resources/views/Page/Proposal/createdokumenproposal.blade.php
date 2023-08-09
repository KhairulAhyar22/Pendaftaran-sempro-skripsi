@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="text-center w-auto mx-7 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg mt-11 py-3">
            <h1 class="font-sans text-lg font-bold text-black">PENDAFTARAN SEMINAR PROPOSAL</h1>
        </div>


        <div class="container px-7 my-5 mt-7 pb-8">
            <div class="relative overflow-x-auto bg-white rounded-lg border">
                <div class="flex w-full">
                    <div class="border-b-3 rounded-lg w-full">

                        <form action="/proposal/store/dokumentpersyaratan/{{ $proposal->id }}" method="post" class=""
                            enctype="multipart/form-data" onsubmit="return confirm('Form hanya dapat di isi sekali, pastikan dokumen anda telah benar sebelum mengirim! Yakin kirim dokumen?')">
                            @csrf
                            <div class="py-3 px-8 bg-emerald-700 mb-10 rounded-t-lg">
                                <h3 class="text-white font-medium text-lg">Upload Kelengkapan Dokumen Seminar Proposal</h3>
                            </div>
                            <div class="lg:p-6 p-6 ">
                                <div class="grid grid-cols-1 lg:grid-cols-1 lg:mx-10 gap-7 mb-5 ">
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_krs">Upload KRS</label>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_krs_help">Hasil
                                            cetak/print KRS berjalan dan telah ditanda tangani oleh ketua program studi
                                            <input name="file_krs"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="file_krs_help" id="file_krs" type="file">
                                            @error('file_krs')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_kartu_konsul">Upload Kartu Konsul</label>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                            id="file_kartu_konsul_help">Fotocopy kartu konsultasi yang memiliki keterangan
                                            telah disetujui oleh kedua pembimbing dan telah menghadiri minimal 10 seminar
                                            penelitian.</p>
                                        <input name="file_kartu_konsul"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_kartu_konsul_help" id="file_kartu_konsul" type="file">
                                        @error('file_kartu_konsul')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_khs">Upload Fotocopy KHS</label>
                                        <input name="file_khs"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_khs_help" id="file_khs" type="file">
                                        @error('file_khs')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_lunas_spp">Upload Keterangan Lunas SPP</label>
                                        <input name="file_lunas_spp"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_lunas_spp_help" id="file_lunas_spp" type="file">
                                        @error('file_lunas_spp')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_slip_pembayaran">Upload Fotocopy slip pembayaran semster
                                            berjalan</label>
                                        <input name="file_slip_pembayaran"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_slip_pembayaran_help" id="file_slip_pembayaran"
                                            type="file">
                                        @error('file_slip_pembayaran')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_input">Mengumpulkan 2 Rangkap Proposal yang Telah Dijilid Warna
                                            Merah</label>
                                        <input 
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_input_help" id="file_input" type="file" disabled>
                                        @error('nama_mahasiswa')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex justify-start lg:mx-10 my-8 ">
                                    <button type=" submit" 
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 
                                                    font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

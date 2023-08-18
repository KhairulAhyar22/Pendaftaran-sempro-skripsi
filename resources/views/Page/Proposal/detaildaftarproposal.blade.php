@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="container pb-8 my-5 mt-10 px-7 drop-shadow-lg">
            <div class="relative pb-10 overflow-x-auto bg-white border rounded-lg">
                <div class="flex w-full">
                    <div class="w-full rounded-lg border-b-3">

                        <div class="px-8 py-3 rounded-t-lg bg-emerald-700">
                            <h3 class="text-lg font-medium text-white">Detail Data Daftar Proposal</h3>
                        </div>
                        <div class="p-6 lg:p-6 ">
                            <div class="flex justify-start mb-10 ">
                                @if ($data->status == 'Terbuat')
                                    <div class="flex items-center text-slate-800 rounded-3xl px-5 py-1.5 bg-slate-300">
                                        <iconify-icon icon="carbon:incomplete-cancel" class="text-pink-smooth"
                                            width="22" height="20"></iconify-icon>
                                        </iconify-icon>
                                        <p class="ml-1 text-sm ">Menunggu Verifikasi</p>
                                    </div>
                                @endif
                                @if ($data->status == 'Terverifikasi')
                                    <div class="flex text-green-950 items-center rounded-3xl px-4 py-1.5 bg-green-300">
                                        <iconify-icon icon="material-symbols:check-circle-rounded" class=""
                                            width="22" height="20">
                                        </iconify-icon>
                                        <p class="ml-2 text-sm">Layak</p>
                                    </div>
                                @endif
                            </div>
                            <div class="grid grid-cols-1 mb-5 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Nama
                                            Mahasiswa : </h3>
                                        <p>{{ $data->nama_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">NIM :
                                        </h3>
                                        <p>{{ $data->nim }}</p>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Status
                                            Status Mahasiswa :
                                        </h3>
                                        <p>{{ $data->status_mahasiswa }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">
                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Jenis
                                            Kelamin : </h3>
                                        <p>{{ $data->jenis_kelamin }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">Judul
                                            Proposal : </h3>
                                        <p>{{ $data->judul_proposal }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Utama : </h3>
                                        <p>{{ $data->pembimbing1 }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">
                                            Pembimbing Kedua : </h3>
                                        <p>{{ $data->pembimbing2 }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">TGL ACC
                                            Pembimbing Utama : </h3>
                                        <p>{{ Carbon\Carbon::parse($data->tgl_accp1)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">TGL ACC
                                            Pembimbing Kedua : </h3>
                                        <p>{{ Carbon\Carbon::parse($data->tgl_accp2)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="flex-col sm:flex md:justify-start">

                                        <h3 class="block mb-2 text-base font-semibold text-gray-900 dark:text-white">No HP :
                                        </h3>
                                        <p>{{ $data->no_hp }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mb-3 overflow-x-auto">
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
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $data->file_krs ? $data->file_krs : '-' }}</a>
                                            </th>
                                            <td class="px-4 py-4">
                                                <a href="/Dokument/Proposal/Proposal/{{ $data->file_proposal }}"
                                                    target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $data->file_proposal ? $data->file_proposal : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/Dokument/Proposal/KartuKonsul/{{ $file->file_kartu_konsul }}"
                                                    target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $file->file_kartu_konsul ? $file->file_kartu_konsul : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/Dokument/Proposal/KHS/{{ $file->file_khs }}" target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $file->file_khs ? $file->file_khs : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/Dokument/Proposal/LunasSPP/{{ $file->file_lunas_spp }}"
                                                    target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $file->file_lunas_spp ? $file->file_lunas_spp : '-' }}</a>
                                            </td>
                                            <td class="px-4 py-4">
                                                <a href="/Dokument/Proposal/SlipPembayaran/{{ $file->file_slip_pembayaran }}"
                                                    target="_blank"
                                                    class="font-normal text-slate-700 hover:font-medium hover:text-slate-800">{{ $file->file_slip_pembayaran ? $file->file_slip_pembayaran : '-' }}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <p class="px-6 py-2 pt-2 font-medium text-white rounded-t-lg lg:mx-10 bg-emerald-700">Kelengkapan
                            Berkas Pendaftaran (<span class="font-normal"> Diverifikasi oleh staff program studi</span>)</p> --}}
                        {{-- <div class="px-6 mb-5 border border-gray-300 rounded shadow-xl lg:mx-10 dark:border-gray-700">
                            <div class="flex my-4">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan KRS </label>
                                    <span id="helper-checkbox-text"
                                        class="text-sm font-normal text-gray-500 dark:text-gray-300">(Hasil cetak/print KRS
                                        berjalan dan telah ditanda tangani oleh ketua program studi)
                                    </span>
                                    <div class="pt-2">
                                        <a href="/Dokument/Proposal/KRS/{{ $file->file_krs }}" target="_blank"
                                            class="pt-2 font-semibold text-slate-700 hover:font-medium hover:text-slate-800">
                                            {{ $file->file_krs ? $file->file_krs : '-' }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex my-6">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Kartu
                                        Konsul </label>
                                    <span id="helper-checkbox-text"
                                        class="text-sm font-normal text-gray-500 dark:text-gray-300"> (Mengumpulkan kartu
                                        konsultasi yang memiliki keterangan telah disetujui oleh kedua pembimbing dan telah
                                        menghadiri minimal 10 seminar penelitian)</span>
                                    <div class="pt-2">
                                        <a href="/Dokument/Proposal/KRS/{{ $file->file_krs }}" target="_blank"
                                            class="pt-2 font-semibold text-slate-700 hover:font-medium hover:text-slate-800">
                                            {{ $file->file_krs ? $file->file_krs : '-' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex my-6">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Foto Copy KTM
                                    </label>
                                </div>
                            </div>
                            <div class="flex my-6">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Foto Copy
                                        KHS </label>
                                    <div class="pt-2">
                                        <a href="/Dokument/Proposal/KRS/{{ $file->file_krs }}" target="_blank"
                                            class="pt-2 font-semibold text-slate-700 hover:font-medium hover:text-slate-800">
                                            {{ $file->file_krs ? $file->file_krs : '-' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex my-6">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Keterangan Lunas
                                        SPP </label>
                                    <div class="pt-2">
                                        <a href="/Dokument/Proposal/KRS/{{ $file->file_krs }}" target="_blank"
                                            class="pt-2 font-semibold text-slate-700 hover:font-medium hover:text-slate-800">
                                            {{ $file->file_krs ? $file->file_krs : '-' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex my-6">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Formulir
                                        Pendaftaran Seminar Proposal </label>
                                    <div class="pt-2">
                                        <a href="/Dokument/Proposal/KRS/{{ $file->file_krs }}" target="_blank"
                                            class="pt-2 font-semibold text-slate-700 hover:font-medium hover:text-slate-800">
                                            {{ $file->file_krs ? $file->file_krs : '-' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex my-6">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Slip Pembayaran
                                        Semester Berjalan </label>
                                    <div class="pt-2">
                                        <a href="/Dokument/Proposal/KRS/{{ $file->file_krs }}" target="_blank"
                                            class="pt-2 font-semibold text-slate-700 hover:font-medium hover:text-slate-800">
                                            {{ $file->file_krs ? $file->file_krs : '-' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex my-4">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                        value="" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="helper-checkbox"
                                        class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Proposal</label>
                                    <span id="helper-checkbox-text"
                                        class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan proposal
                                        2 rangkap yang telah di jilid warna merah </span>

                                </div>

                            </div>
                        </div> --}}
                        <div class="flex justify-start mb-8 mx-6 lg:mx-8 ">
                            @if (Auth::user()->level == 'Mahasiswa')
                            @else
                                <a href="/proposal/vetifikasi/{{ $data->id }}"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 
                                                        font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Verifikasi
                                </a>
                            @endif
                            <a
                                href="/proposal"class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 
                                                    font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

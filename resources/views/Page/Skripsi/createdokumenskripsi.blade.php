<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>


    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen pt-11">
        <div class="text-center w-auto mx-7 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg py-3">
            <h1 class="font-sans text-lg font-bold text-black">PENDAFTARAN SEMINAR SKRIPSI</h1>
        </div>


        <div class="px-7 my-5 mt-7 pb-8">
            <div class="relative overflow-x-auto bg-white rounded-lg border">
                <div class="flex w-full">
                    <div class="border-b-3 rounded-lg w-full">

                        <form action="/skripsi/store/dokumentpersyaratan/{{ $skripsi->id }}" method="post"
                            class="" enctype="multipart/form-data"
                            onsubmit="return confirm('Form hanya dapat di isi sekali, pastikan dokumen anda telah benar sebelum mengirim! Yakin kirim dokumen?')">
                            @csrf
                            <div class="py-3 px-8 bg-emerald-700 mb-10 rounded-t-lg">
                                <h3 class="text-white font-medium text-lg">Upload Kelengkapan Dokumen Ujian Skripsi</h3>
                            </div>
                            <div class="lg:p-6 p-6 ">
                                <div class="grid grid-cols-1 lg:grid-cols-1 lg:mx-10 gap-7 mb-5 ">
                                    {{-- <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_form">Upload File Form Pendaftaran??</label>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_form_help">
                                            Hasil
                                            cetak/print pengisian formulir pendaftaran ujian skripsi??</p>
                                        <input name="file_form" value="{{ old('file_form') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_form_help" id="file_form" type="file" disabled>
                                        @error('file_form')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div> --}}
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_skripsi">Upload File Skripsi</label>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_skripsi_help">
                                            Hasil
                                            cetak skripsi yaang telah acc uji similarity (4 rangkap)</p>
                                        <input name="file_skripsi" value="{{ old('file_skripsi') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_skripsi_help" id="file_skripsi" type="file">
                                        @error('file_skripsi')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_bukti_acc">Upload Bukti ACC Skripsi</label>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                            id="file_bukti_acc_help">
                                            Hasil cetak bukti Acc skripsi dari kedua pembimbing
                                        </p>
                                        <input name="file_bukti_acc" value="{{ old('file_bukti_acc') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_bukti_acc_help" id="file_bukti_acc" type="file">
                                        @error('file_bukti_acc')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_spus">Upload Surat keterangan persetujuan ujian skripsi dari ketua
                                            prodi</label>
                                        <input name="file_spus" value="{{ old('file_spus') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_spus_help" id="file_spus" type="file">
                                        @error('file_spus')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_pengesahan_proposal">Upload File Pengesahan Proposal</label>
                                        <input name="file_pengesahan_proposal"
                                            value="{{ old('file_pengesahan_proposal') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_pengesahan_proposal_help"
                                            id="file_pengesahan_proposal" type="file">
                                        @error('file_pengesahan_proposal')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_krs">Upload KRS semester berjalan</label>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                            id="file_kartu_konsul_help">Hasil cetak/print KRS semester berjalan dan
                                            telah
                                            ditanda tangani oleh ketua prodi
                                        </p>
                                        <input name="file_krs" value="{{ old('file_krs') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_krs_help" id="file_krs" type="file">
                                        @error('file_krs')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_ktm">Fotocopy KTM</label>
                                        <input name="file_ktm" value="{{ old('file_ktm') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_ktm_help" id="file_ktm" type="file">
                                        @error('file_ktm')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                            for="file_bukti_lunasspp">Surat keterangan lunas SPP</label>
                                        <input name="file_bukti_lunasspp" value="{{ old('file_bukti_lunasspp') }}"
                                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            aria-describedby="file_bukti_lunasspp_help" id="file_bukti_lunasspp"
                                            type="file">
                                        @error('file_bukti_lunasspp')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    {{-- Icon Iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>

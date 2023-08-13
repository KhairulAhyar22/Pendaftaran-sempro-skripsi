<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir {{ $data->nim }}_{{ $data->nama_mahasiswa }}</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/3.1.0/iconify.min.js"
        integrity="sha512-E5zagJczGRm5vRd4acej4RtUFCBd8JDedgljicTgnZrwLYzu4/GvImQ6VtJfxAtnPluq1b3tPNaz9yNuTKWQzw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.css">

    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ["Montserrat"],
                    },
                    colors: {
                        "dark-green": "#1E3F41",
                        "light-green": "#659093",
                        "cream": "#DDB07F",
                        "cgray": "#F5F5F5",
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="container mx-auto px-7 my-5 mt-7 pb-8">
        <div class="relative overflow-x-auto bg-white rounded-lg border">
            <div class="flex w-full">
                <div class="border-b-3 rounded-lg w-full">

                    <form action="" method="post" class="" enctype="multipart/form-data">
                        <div class="py-3 px-8 bg-emerald-700 mb-0 rounded-t-lg">
                            <h3 class="text-white font-medium text-lg">Form Daftar Seminar Proposal</h3>
                        </div>
                        <div class="lg:p-6 p-6 ">
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:mx-10 gap-7 mb-5 ">
                                <div class="mb-0">
                                    <label for="nama_mahasiswa"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Mahasiswa</label>
                                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa"
                                        value="{{ old('nama_mahasiswa', $data->nama_mahasiswa) }}"
                                        placeholder="Write your mahasiswa here..."
                                        class="{{ $errors->has('nama_mahasiswa') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('nama_mahasiswa')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-0">
                                    <label for="nim"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                                    <input type="number" id="nim" name="nim"
                                        value="{{ old('nim', $data->nim) }}" placeholder="Write nim here..."
                                        class="{{ $errors->has('nim') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('nim')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="status_mahasiswa"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                        Mahasiswa</label>
                                    <fieldset>
                                        <legend class="sr-only">Status Mahasiswa</legend>
                                        <div class="flex items-center mb-4">
                                            <input id="regular" type="radio" name="status_mahasiswa" value="Regular"
                                                class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                {{ old('status_mahasiswa', $data->status_mahasiswa) == 'Regular' ? 'checked' : '' }}>
                                            <label for="regular"
                                                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
                                        </div>

                                        <div class="flex items-center mb-4">
                                            <input id="nonregular" type="radio" name="status_mahasiswa"
                                                value="Non Regular"
                                                class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                {{ old('status_mahasiswa', $data->status_mahasiswa) == 'Non Regular' ? 'checked' : '' }}>
                                            <label for="nonregular"
                                                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non
                                                Regular (Pindahan/Konversi)</label>
                                        </div>
                                    </fieldset>
                                    @error('status_mahasiswa')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="judul_proposal"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Judul Proposal</label>
                                    <textarea id="judul_proposal" rows="3" name="judul_proposal"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="{{ old('judul_proposal') ?: 'Write your thoughts here...' }}" required>{{ old('judul_proposal', $data->judul_proposal) }}</textarea>
                                    @error('judul_proposal')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                @php
                                    use Carbon\Carbon;
                                @endphp
                                <div class="mb-0">
                                    <label for="Jenis_kelamin"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                        Kelamin</label>
                                    <fieldset>
                                        <legend class="sr-only">Jenis Kelamin</legend>
                                        <div class="flex gap-5">
                                            <div class="flex items-center mb-4">
                                                <input id="country-option-1" type="radio" name="jenis_kelamin"
                                                    value="Laki Laki"
                                                    class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Laki Laki' ? 'checked' : '' }}>
                                                <label for="country-option-1"
                                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">L</label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="country-option-2" type="radio" name="jenis_kelamin"
                                                    value="Perempuan"
                                                    class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
                                                <label for="country-option-2"
                                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">P</label>
                                            </div>

                                        </div>
                                    </fieldset>
                                    @error('level')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="pembimbing1"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Pembimbing Utama</label>
                                    <select id="pembimbing1" name="pembimbing1"
                                        class="{{ $errors->has('pembimbing1') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        @foreach ($daftardosen as $dosen)
                                            <option value="{{ $dosen->nama_dosen }}"
                                                {{ $data->pembimbing1 == $dosen->nama_dosen ? 'selected' : '' }}>
                                                {{ $dosen->nama_dosen }}</option>
                                        @endforeach
                                    </select>
                                    @error('pembimbing1')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="pembimbing2"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Pembimbing Kedua</label>
                                    <select id="pembimbing2" name="pembimbing2"
                                        class="{{ $errors->has('pembimbing2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        @foreach ($daftardosen as $dosen)
                                            <option value="{{ $dosen->nama_dosen }}"
                                                {{ $data->pembimbing2 == $dosen->nama_dosen ? 'selected' : '' }}>
                                                {{ $dosen->nama_dosen }}</option>
                                        @endforeach
                                        <option value="Nirsal, S.Kom., M.Kom.">Nirsal, S.Kom., M.Kom.</option>
                                        <option value="Vicky Bin Djusmin, S.Kom., M.Kom.">Vicky Bin Djusmin, S.Kom.,
                                            M.Kom.</option>
                                    </select>
                                    @error('pembimbing2')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="tgl_accp1"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Tgl ACC Pembimbing Utama</label>
                                    <input type="date" id="tgl_accp1" name="tgl_accp1"
                                        value="{{ old('tgl_accp1', Carbon::parse($data->tgl_accp1)->format('Y-m-d')) }}"
                                        placeholder="Write tgl_accp2 here..."
                                        class="{{ $errors->has('tgl_accp2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('tgl_accp1')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="tgl_accp2"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Tgl ACC Pembimbin Utama</label>
                                    <input type="date" id="tgl_accp2" name="tgl_accp2"
                                        value="{{ old('tgl_accp2', Carbon::parse($data->tgl_accp2)->format('Y-m-d')) }}"
                                        placeholder="Write tgl_accp2 here..."
                                        class="{{ $errors->has('tgl_accp2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('tgl_accp2')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="no_hp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        No HP</label>
                                    <input type="number" id="no_hp" name="no_hp"
                                        value="{{ old('no_hp', $data->no_hp) }}" placeholder="Write no_hp here..."
                                        class="{{ $errors->has('no_hp') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('no_hp')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="file_proposal">
                                        Upload Proposal
                                    </label>
                                    <input name="file_proposal"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_proposal_help" id="file_proposal" type="file">
                                    @if (old('file_proposal', $data->file_proposal))
                                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            File yang diunggah: {{ old('file_proposal', $data->file_proposal) }}
                                        </div>
                                    @endif
                                    @error('file_proposal')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="file_krs">
                                        Upload KRS
                                    </label>
                                    <input name="file_krs"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_krs_help" id="file_krs" type="file">
                                    @if (old('file_krs', $data->file_krs))
                                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            File yang diunggah: {{ old('file_krs', $data->file_krs) }}
                                        </div>
                                    @endif
                                    @error('file_krs')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>


                            <div class=" lg:mx-10 mb-5 px-6 border border-gray-200 rounded dark:border-gray-700">
                                <p class="font-medium text-gray-900 dark:text-gray-300 mt-5">Kelengkapan Berkas
                                    Pendaftaran (<span class="font-normal"> Diisi oleh staff program studi</span>)</p>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan
                                            KRS</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Hasil
                                            cetak/print KRS berjalan dan telah ditanda tangani oleh ketua program studi
                                        </p>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan
                                            Proposal</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            proposal 2 rangkap yang telah di jilid warna merah </p>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Kartu
                                            Konsul</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            kartu konsultasi yang memiliki keterangan telah disetujui oleh kedua
                                            pembimbing dan telah menghadiri minimal 10 seminar penelitian</p>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Foto Copy
                                            KTM</label>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Foto Copy
                                            KHS</label>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan
                                            Keterangan Lunas SPP</label>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Formulir
                                            Pendaftaran Seminar Proposal</label>
                                    </div>
                                </div>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Slip
                                            Pembayaran Semester Berjalan</label>
                                    </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    {{-- Icon Iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir {{ $skripsi->nim }}_{{ $skripsi->nama_mahasiswa }}</title>
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

                    <form>
                        <div class="py-3 px-8 bg-emerald-700 mb-10 rounded-t-lg">
                            <h3 class="text-white font-medium text-lg">Form Daftar Ujian Skripsi</h3>
                        </div>
                        <div class="lg:p-6 p-6 ">
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:mx-10 gap-7 mb-5 ">
                                <div class="mb-0">
                                    <label for="nama_mahasiswa"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Mahasiswa</label>
                                    <input type="nama_mahasiswa" id="nama_mahasiswa" name="nama_mahasiswa"
                                        value="{{ old('nama_mahasiswa', $skripsi->nama_mahasiswa) }}"
                                        placeholder="Write nama_mahasiswa here..."
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
                                        value="{{ old('nim', $skripsi->nim) }}" placeholder="Write nim here..."
                                        class="{{ $errors->has('nim') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('nim')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="status_mahasiswa"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                        Mahasiswa</label>
                                    <fieldset>
                                        <legend class="sr-only">Status Mahasiswa</legend>
                                        <div class="flex gap-5">
                                            <div class="flex items-center mb-4">
                                                <input id="regular" type="radio" name="status_mahasiswa"
                                                    value="Regular"
                                                    class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ old('status_mahasiswa', $skripsi->status_mahasiswa) == 'Regular' ? 'checked' : '' }}>
                                                <label for="regular"
                                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="nonregular" type="radio" name="status_mahasiswa"
                                                    value="Non Regular"
                                                    class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ old('status_mahasiswa', $skripsi->status_mahasiswa) == 'Non Regular' ? 'checked' : '' }}>
                                                <label for="nonregular"
                                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non
                                                    Regular (Pindahan/Konversi)</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @error('status_mahasiswa')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                        Kelamin</label>
                                    <fieldset>
                                        <legend class="sr-only">Jenis Kelamin</legend>
                                        <div class="flex gap-5">
                                            <div class="flex items-center mb-4">
                                                <input id="country-option-1" type="radio" name="jenis_kelamin"
                                                    value="Laki Laki"
                                                    class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ old('jenis_kelamin', $skripsi->jenis_kelamin) == 'Laki Laki' ? 'checked' : '' }}>
                                                <label for="country-option-1"
                                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">L</label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="country-option-2" type="radio" name="jenis_kelamin"
                                                    value="Perempuan"
                                                    class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                    {{ old('jenis_kelamin', $skripsi->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
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
                                    <label for="judul_skripsi"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Judul Skripsi</label>
                                    <textarea id="judul_skripsi" rows="3" name="judul_skripsi"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="{{ old('judul_skripsi') ?: 'Write your thoughts here...' }}" required>{{ old('judul_skripsi', $skripsi->judul_skripsi) }}</textarea>
                                    @error('judul_skripsi')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="pembimbing1"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Pembimbing Kedua</label>
                                    <select id="pembimbing1" name="pembimbing1"
                                        class="{{ $errors->has('pembimbing1') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option selected></option>
                                        @foreach ($daftardosen as $dosen)
                                            <option value="{{ $dosen->nama_dosen }}"
                                                {{ $skripsi->pembimbing1 == $dosen->nama_dosen ? 'selected' : '' }}>
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
                                        <option selected></option>
                                        @foreach ($daftardosen as $dosen)
                                            <option value="{{ $dosen->nama_dosen }}"
                                                {{ $skripsi->pembimbing2 == $dosen->nama_dosen ? 'selected' : '' }}>
                                                {{ $dosen->nama_dosen }}</option>
                                        @endforeach
                                    </select>
                                    @error('pembimbing2')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="tglacc_proposal"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                        ACC
                                        Proposal</label>
                                    <input type="date" id="tglacc_proposal" name="tglacc_proposal"
                                        value="{{ old('tglacc_proposal', Carbon\Carbon::parse($skripsi->tglacc_proposal)->format('Y-m-d')) }}"
                                        placeholder="Write tglacc_proposal here..."
                                        class="{{ $errors->has('tglacc_proposal') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('tglacc_proposal')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="no_hp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                        HP</label>
                                    <input type="number" id="no_hp" name="no_hp"
                                        value="{{ old('no_hp', $skripsi->no_hp) }}" placeholder="Write no_hp here..."
                                        class="{{ $errors->has('no_hp') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    @error('no_hp')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label for="nama_pa"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Dosen PA</label>
                                    <select id="nama_pa" name="nama_pa"
                                        class="{{ $errors->has('nama_pa') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option selected></option>
                                        @foreach ($daftardosen as $dosen)
                                            <option value="{{ $dosen->nama_dosen }}"
                                                {{ $skripsi->nama_pa == $dosen->nama_dosen ? 'selected' : '' }}>
                                                {{ $dosen->nama_dosen }}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_pa')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="uji_similarity">
                                        Screen Shoot Uji Similarity
                                    </label>
                                    <input name="uji_similarity"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="uji_similarity_help" id="uji_similarity" type="file">
                                    @if (old('uji_similarity', $skripsi->uji_similarity))
                                        <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            File yang diunggah: {{ old('uji_similarity', $skripsi->uji_similarity) }}
                                        </div>
                                    @endif
                                    @error('uji_similarity')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>



                            <div class="lg:mx-10 mb-5 px-6 border border-gray-200 rounded dark:border-gray-700">
                                <p class="font-medium text-gray-900 dark:text-gray-300 mt-5">Kelengkapan Berkas
                                    Pendaftaran (<span class="font-normal"> Dikumpul di fakultas</span>)</p>
                                <div class="flex my-6">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value="" checked
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox"
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Formulir
                                            Pendaftaran</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            hasil print pengisian formulir pendaftaran ujian skripsi</p>
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
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Hasil
                                            Cetak Skripsi</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            hasil cetak skripsi yang telah acc uji similarity (4 rangkap)</p>
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
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Bukti ACC
                                            Skripsi</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            hasil cetak Bukti acc skripsi dari kedua pembimbing</p>

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
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Surat
                                            Keterangan Persetujuan ujian skripsi dari ketua prodi</label>
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
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Bukti
                                            Lembar Pengesahan seminar proposal</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            bukti lembar pengesahan seminar proposal yang telah disetujui oleh kedua
                                            penguji dan ketua prodi</p>
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
                                            class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Fotocopy
                                            KRS semester berjalan</label>
                                        <p id="helper-checkbox-text"
                                            class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                            fotocopy KRS semester berjalan dan telah ditanda tangani oleh program studi
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
                                            class="font-medium text-gray-900 dark:text-gray-300">Fotocopy KTM</label>
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
                                            class="font-medium text-gray-900 dark:text-gray-300">Surat keterangan Lunas
                                            SPP</label>
                                    </div>
                                </div>

                            </div>



                            <div class="flex justify-start lg:mx-10 mx-7 my-8 ">
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

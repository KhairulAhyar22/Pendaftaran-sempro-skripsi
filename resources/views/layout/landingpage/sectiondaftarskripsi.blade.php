<section id="skripsi" class="">
    <div class="container w-full ">
        <div class="overflow-x-auto bg-gray-100 border rounded-lg h-fit">
            <div class="rounded-lg ">
                <form action="/skripsi" method="post" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="pt-2">
                        <div class="grid grid-cols-1 mb-1 lg:grid-cols-2 lg:mx-10 gap-7 ">
                            <div class="">
                                <label for="nama_mahasiswa" class="block mb-2 text-sm font-medium text-gray-900 d">Nama
                                    Mahasiswa</label>
                                <input type="text" id="nama_mahasiswa" name="nama_mahasiswa"
                                    value="{{ old('nama_mahasiswa') }}" placeholder="Write your mahasiswa here..."
                                    class="{{ $errors->has('nama_mahasiswa') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                @error('nama_mahasiswa')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="">
                                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 d">NIM</label>
                                <input type="number" id="nim" name="nim" value="{{ old('nim') }}"
                                    placeholder="Write nim here..."
                                    class="{{ $errors->has('nim') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                @error('nim')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex flex-row gap-5">
                                <div class="">
                                    <label for="status_mahasiswa"
                                        class="block mb-2 text-sm font-medium text-gray-900 d">Status
                                        Mahasiswa</label>
                                    <fieldset>
                                        <legend class="sr-only">Status Mahasiswa</legend>
                                        <div class="flex items-center mb-4">
                                            <input id="regular" type="radio" name="status_mahasiswa" value="Regular"
                                                class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                checked>
                                            <label for="regular"
                                                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
                                        </div>

                                        <div class="flex items-center mb-4">
                                            <input id="nonregular" type="radio" name="status_mahasiswa"
                                                value="Non Regular"
                                                class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="nonregular"
                                                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non
                                                Regular (Pindahan/Konversi)</label>
                                        </div>
                                    </fieldset>
                                    @error('status_mahasiswa')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="Jenis_kelamin"
                                        class="block mb-2 text-sm font-medium text-gray-900 d">Jenis
                                        Kelamin</label>
                                    <fieldset>
                                        <legend class="sr-only">Jenis Kelamin</legend>
                                        <div class="flex items-center mb-4">
                                            <input id="country-option-1" type="radio" name="jenis_kelamin"
                                                value="Laki Laki"
                                                class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                                checked>
                                            <label for="country-option-1"
                                                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">L</label>
                                        </div>

                                        <div class="flex items-center mb-4">
                                            <input id="country-option-2" type="radio" name="jenis_kelamin"
                                                value="Perempuan"
                                                class="w-4 h-4 border-gray-400 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="country-option-2"
                                                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">P</label>
                                        </div>
                                    </fieldset>
                                    @error('jenis_kelamin')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <label for="judul_proposal" class="block mb-2 text-sm font-medium text-gray-900 d">
                                    Judul Skripsi</label>
                                <textarea id="judul_proposal" rows="3" name="judul_proposal"
                                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your thoughts here..." required></textarea>
                                @error('judul_proposal')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="">
                                <label for="pembimbing1" class="block mb-2 text-sm font-medium text-gray-900 d">
                                    Pembimbing Utama</label>
                                <select id="pembimbing1" name="pembimbing1"
                                    class="{{ $errors->has('pembimbing1') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option selected></option>
                                    @foreach ($daftardosen as $dosen)
                                        <option value="{{ $dosen->nama_dosen }}">{{ $dosen->nama_dosen }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('pembimbing1')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="">
                                <label for="tgl_accp1" class="block mb-2 text-sm font-medium text-gray-900 d">
                                    Tgl ACC Pembimbing Utama</label>
                                <input type="date" id="tgl_accp1" name="tgl_accp1"
                                    placeholder="Write tgl_accp2 here..."
                                    class="{{ $errors->has('tgl_accp2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                @error('tgl_accp1')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="">
                                <label for="pembimbing2" class="block mb-2 text-sm font-medium text-gray-900 d">
                                    Pembimbing Pendamping</label>
                                <select id="pembimbing2" name="pembimbing2"
                                    class="{{ $errors->has('pembimbing2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                    <option selected></option>
                                    @foreach ($daftardosen as $dosen)
                                        <option value="{{ $dosen->nama_dosen }}">{{ $dosen->nama_dosen }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('pembimbing2')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="">
                                <label for="tgl_accp2" class="block mb-2 text-sm font-medium text-gray-900 d">
                                    Tgl ACC Pembimbin Pendamping</label>
                                <input type="date" id="tgl_accp2" name="tgl_accp2"
                                    placeholder="Write tgl_accp2 here..."
                                    class="{{ $errors->has('tgl_accp2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                @error('tgl_accp2')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="">
                                <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 d">
                                    Kontak WhatsApp</label>
                                <input type="tel" id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                                    placeholder="Write no_hp here..."
                                    class="{{ $errors->has('no_hp') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 d dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                @error('no_hp')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex gap-5 justify-between">
                                <div class="w-full">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 d"
                                        for="file_proposal">Upload Proposal</label>
                                    <input name="file_proposal"
                                        class="block w-full text-sm h-[38px] text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_proposal_help" id="file_proposal" type="file">
                                    @error('file_proposal')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 d"
                                        for="file_krs">Upload KRS</label>
                                    <input name="file_krs"
                                        class="block w-full text-sm h-[38px] text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_krs_help" id="file_krs" type="file">
                                    @error('file_krs')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- <div class="px-6 mb-5 border border-gray-200 rounded  lg:mx-10 dark:border-gray-700">
                                    <p
                                        class="mt-5 font-medium text-gray-900 dark:text-gray-300">Kelengkapan Berkas Pendaftaran (<span class="font-normal"> Diisi oleh staff program studi / Dikumpul di program studi</span>)</p>
                                    <div class="flex my-6">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
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
                                                type="checkbox" value=""
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
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox"
                                                class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Kartu
                                                Konsul</label>
                                                <p id="helper-checkbox-text"
                                                class="text-sm font-normal text-gray-500 dark:text-gray-300">Mengumpulkan
                                                kartu konsultasi yang memiliki keterangan telah disetujui oleh Pendamping pembimbing dan telah menghadiri minimal 10 seminar penelitian</p>
                                        </div>
                                    </div>
                                    <div class="flex my-6">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
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
                                                type="checkbox" value=""
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
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        
                                        
                                            <label for="helper-checkbox"
                                                class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan
                                                Keterangan Lunas SPP</label>
                                        </div>
                                    </div>
                                    <div class="flex my-6">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox"
                                                class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Formulir Pendaftaran Seminar Proposal</label>
                                        </div>
                                    </div>
                                    <div class="flex my-6">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox"
                                                class="font-medium text-gray-900 dark:text-gray-300">Mengumpulkan Slip
                                                Pembayaran Semester Berjalan</label>
                                        </div>
                                    </div>

                                </div> -->
                        <div class="flex justify-start my-6 lg:mx-10 ">
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
</section>

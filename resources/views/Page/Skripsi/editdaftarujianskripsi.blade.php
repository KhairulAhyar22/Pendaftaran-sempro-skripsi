@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="text-center w-auto mx-7 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg mt-11 py-3">
            <h1 class="font-sans text-lg font-bold text-black">PENDAFTARAN UJIAN SKRIPSI</h1>
        </div>


        <div class="container px-7 my-4 mt-7 pb-8">
            <div class="relative overflow-x-auto bg-white rounded-lg border">
                <div class="flex w-full">
                    <div class="border-b-3 rounded-lg w-full">

                        <form action="/skripsi/{{ $skripsi->id }}" method="post" class="">
                            @csrf
                            @method('PUT')
                            <div class="py-3 px-8 bg-emerald-700 mb-10 rounded-t-lg">
                                <h3 class="text-white font-medium text-lg">Form Daftar Ujian Skripsi</h3>
                            </div>
                            <div class="lg:p-6 p-6 ">
                                <div class="grid grid-cols-1 lg:grid-cols-2 lg:mx-10 gap-7 mb-5 ">
                                    <div class="mb-3">
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
                                    <div class="mb-3">
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
                                    <div class="mb-3">
                                        <label for="status_mahasiswa"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                            Mahasiswa</label>
                                        <fieldset>
                                            <legend class="sr-only">Status Mahasiswa</legend>
                                            <div class="flex items-center mb-4">
                                                <input id="regular" type="radio" name="status_mahasiswa" value="Regular"
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
                                        </fieldset>
                                        @error('status_mahasiswa')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                            Kelamin</label>
                                        <fieldset>
                                            <legend class="sr-only">Jenis Kelamin</legend>
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
                                        </fieldset>
                                        @error('level')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
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
                                    <div class="mb-3">
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
                                    <div class="mb-3">
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
                                    <div class="mb-3">
                                        <label for="tglacc_proposal"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal ACC
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
                                    <div class="mb-3">
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
                                    <div class="mb-3">
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
    </div>
@endsection

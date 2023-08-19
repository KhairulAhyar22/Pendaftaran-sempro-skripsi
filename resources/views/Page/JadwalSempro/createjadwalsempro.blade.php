@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')
        {{-- 
        <div class="w-auto py-3 text-center bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg mx-7 mt-11">
            <h1 class="font-sans text-lg font-bold text-black">JADWAL SEMINAR PROPOSAL</h1>
        </div> --}}


        <div class="container pb-8 my-5 px-7 mt-7">
            <div class="relative overflow-x-auto bg-white border rounded-lg">
                <div class="flex w-full">
                    <div class="w-full rounded-lg border-b-3">

                        <form action="/proposal" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            <div class="px-8 py-3 mb-10 rounded-t-lg bg-emerald-700">
                                <h3 class="text-lg font-medium text-white">Surat Jadwal Seminar Proposal</h3>
                            </div>
                            <div class="p-6 lg:p-6 ">
                                <div class="grid grid-cols-1 mb-5 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                    <div class="mb-3">
                                        <label for="nama_mahasiswa"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama/NIM
                                            Mahasiswa</label>
                                        <select id="id_proposal" name="id_proposal" onchange="redirectToById(this)"
                                            class="{{ $errors->has('id_proposal') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                            <option>Pilih Mahasiswa</option>
                                            @foreach ($listsempro as $sempro)
                                                <option value="{{ $sempro->id }}">{{ $sempro->nama_mahasiswa }} /
                                                    {{ $sempro->nim }}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            function redirectToById(selectElement) {
                                                var selectedOption = selectElement.value;
                                                if (selectedOption !== "") {
                                                    window.location.href = "/jadwal/seminarproposal/create/" + selectedOption;
                                                }
                                            }
                                        </script>
                                        @error('nama_mahasiswa')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="no_surat"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                            Surat</label>
                                        <input type="text" id="no_surat" name="no_surat" value="{{ old('no_surat') }}"
                                            placeholder="Write no_surat here..."
                                            class="{{ $errors->has('no_surat') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                        @error('no_surat')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="pembimbing1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Pembimbing Utama (Ketua Tim)</label>
                                        <select id="pembimbing1" name="pembimbing1"
                                            class="{{ $errors->has('pembimbing1') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                            <option selected></option>

                                        </select>
                                        @error('pembimbing1')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="pembimbing2"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Pembimbing Kedua (Anggota)</label>
                                        <select id="pembimbing2" name="pembimbing2"
                                            class="{{ $errors->has('pembimbing2') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                            <option selected></option>

                                        </select>
                                        @error('pembimbing2')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                        <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}"
                                            placeholder="Write tanggal here..."
                                            class="{{ $errors->has('tanggal') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                        @error('tanggal')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempat"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Ruangan</label>
                                        <input type="text" id="tempat" name="tempat" value="{{ old('tempat') }}"
                                            placeholder="Write tempat here..."
                                            class="{{ $errors->has('tempat') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                        @error('tempat')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>
                                        <input type="time" id="waktu" name="waktu" value="{{ old('waktu') }}"
                                            placeholder="Write waktu here..."
                                            class="{{ $errors->has('waktu') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                        @error('waktu')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="flex justify-start my-8 lg:mx-10 ">
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
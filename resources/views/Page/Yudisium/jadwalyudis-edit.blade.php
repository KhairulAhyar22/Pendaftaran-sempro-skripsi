@extends('layout.index')
@section('content')
    <div class="w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')        
        <div class="container pb-8 my-5 px-7 mt-7">
            <div class="relative overflow-x-auto bg-white border rounded-lg">
                <div class="flex w-full">
                    <div class="w-full rounded-lg border-b-3">
                        <form action="/jadwal/yudisium/update/{{ $data->id }}" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            <div class="px-8 py-3 mb-10 rounded-t-lg bg-emerald-700">
                                <h3 class="text-lg font-medium text-white">Jadwal Yudisium</h3>
                            </div>
                            <div class="p-6 lg:p-6 ">
                                <div class="grid grid-cols-1 mb-5 lg:grid-cols-2 lg:mx-10 gap-7 ">
                                    <div class="mb-3">
                                        <label for="periode"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Yudisium Periode ke-</label>
                                        <select id="periode" name="periode" onchange="redirectToById(this)"
                                            class="{{ $errors->has('periode') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} block w-full p-2.5 text-sm text-gray-900 border rounded-lg  focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                            <option>{{ old('periode', $data->periode) }}</option>
                                                <option value="Periode 1">Periode 1</option>
                                                <option value="Periode 2">Periode 2</option>
                                                <option value="Periode 3">Periode 3</option>
                                                <option value="Periode 4">Periode 4</option>
                                                <option value="Periode 5">Periode 5</option>
                                        </select>
                                        @error('periode')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tahun"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                                        <input type="text" id="tahun" name="tahun" value="{{ old('tahun', $data->tahun) }}"
                                            placeholder="Contoh: 2023"
                                            class="{{ $errors->has('tahun') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                        @error('tahun')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                        <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $data->tanggal) }}"
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
                                        <input type="text" id="tempat" name="tempat" value="{{ old('tempat', $data->tempat) }}"
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
                                        <input type="time" id="waktu" name="waktu" value="{{ old('waktu', $data->waktu) }}"
                                            placeholder="Write waktu here..."
                                            class="{{ $errors->has('waktu') ? 'bg-red-50 border border-red-500' : 'bg-gray-50 border border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                        @error('waktu')
                                            <div class="text-xs text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="flex justify-start my-8 lg:mx-10 ">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 
                                                    font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Simpan
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
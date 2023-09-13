@extends('layout.index')
@section('content')
    <div class="text-center w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="w-auto mx-7 py-3 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg mt-11 ">
            <h1 class="font-sans text-lg font-bold text-black">PENDAFTARAN YUDISIUM</h1>
        </div>

        <!-- CARD -->
        <div class="container px-7 my-5 mt-7 pb-8">
            <div class="relative overflow-x-auto bg-white rounded-lg border">
                <div class="flex w-full">
                    <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">

                        {{-- <div class="flex justify-start">
                            <a href="/skripsi/create"
                                class="text-white flex item-center bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-[3px] px-4 py-2 my-5 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">
                                <p class="px-2"> Tambah data</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 13v3q0 .425.288.713T12 17q.425 0 .713-.288T13 16v-3h3q.425 0 .713-.288T17 12q0-.425-.288-.713T16 11h-3V8q0-.425-.288-.713T12 7q-.425 0-.713.288T11 8v3H8q-.425 0-.713.288T7 12q0 .425.288.713T8 13h3Zm1 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                </svg>
                            </a>
                        </div> --}}

                        <div class="mb-3 overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                    <tr>
                                        <th scope="col" class="px-3 py-2.5">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="px-3 whitespace-nowrap py-2.5 border-l-2 font-medium border-gray-200">
                                            Nama Mahasiswa
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-2.5 min-w-[100px] border-l-2 font-medium border-gray-200">
                                            Judul Skripsi
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-2.5 border-l-2 whitespace-nowrap font-medium border-gray-200">
                                            No HP
                                        </th>
                                        <th scope="col" class="px-3 py-2.5 border-l-2 font-medium border-gray-200">
                                            File PPT
                                        </th>
                                        <th scope="col" class="px-3 py-2.5 border-l-2 font-medium border-gray-200">
                                            Status
                                        </th>
                                        <th scope="col" class="px-3 py-2.5 border-l-2 font-medium border-gray-200">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr
                                            class="text-left text-slate-700 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-3 py-2.5 text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $loop->iteration }}
                                            </th>
                                            <td class="px-3 py-2.5 text-gray-900 whitespace-nowrap">
                                                <p class="uppercase font-semibold">
                                                    {{ $data->nama_mahasiswa }}
                                                </p>
                                                <p class="text-[11px]"><i>
                                                        NIM: {{ $data->nim }}</i>
                                                </p>

                                            </td>
                                            <td class="px-3 py-2.5 min-w-[150px] uppercase ">
                                                {{ $data->judul_skripsi }}
                                            </td>
                                            <td class="px-3 py-2.5">
                                                <p class="text-center">
                                                    {{-- {{ Carbon\Carbon::parse($data->tglacc_proposal)->format('d/m/Y') }}</p> --}}
                                                    {{ $data->no_hp }}
                                            </td>
                                            <td class="px-3 py-2.5 whitespace-nowrap">
                                                {{ $data->file_ppt }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                <div
                                                    class="px-3 py-1 text-center text-black rounded {{ $data->status == 'Terbuat' ? 'text-green-700 bg-green-300' : 'bg-pink-300 text-pink-700' }}">
                                                    {{ $data->status }}
                                                </div>
                                            </td>
                                            <td
                                                class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2.5 py-2 text-sm text-center text-gray-500">
                                                <button id="{{ $data->id }}"
                                                    data-dropdown-toggle="dropdown{{ $data->id }}"
                                                    class="text-gray-800 border hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 
                                                4.001A2 2 0 0 0 12 10z" />
                                                    </svg>
                                                    <!-- <iconify-icon icon="ooui:ellipsis" class="text-xl"></iconify-icon> -->
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown{{ $data->id }}"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 right-0">
                                                    <ul class="py-2 text-sm font-medium text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownDefaultButton">
                                                        <li>
                                                            <a href="/skripsi/{{ $data->id }}/edit"
                                                                class="block px-4 py-[7px] text-green-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-center">
                                                                <div class="flex items-center justify-end w-28 mx-auto">
                                                                    <iconify-icon icon="tabler:edit"
                                                                        class="text-[18px] mr-2">
                                                                    </iconify-icon>
                                                                    <p class="text-sm">Edit</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("/skripsi/{$data->id}") }}"
                                                                class="block px-4 py-[7px] text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-end">
                                                                <div class="flex items-center justify-end w-28 mx-auto">
                                                                    <iconify-icon icon="iconamoon:eye"
                                                                        class="text-[18px] mr-2"></iconify-icon>
                                                                    <p class="text-sm">Show</p>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="/skripsi/hasilformskripsi/{{ $data->id }}"
                                                                class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-end">
                                                                <div class="flex items-center justify-end w-28 mx-auto">
                                                                    {{-- <iconify-icon icon="simple-line-icons:check"
                                                                        class="text-[18px] mr-2"></iconify-icon> --}}
                                                                    <iconify-icon icon="ic:round-download"
                                                                        class="text-[20px] mr-2"></iconify-icon>
                                                                    <p class="text-sm">Unduh Form</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="/skripsi/{{ $data->id }}" method="POST"
                                                                onsubmit="return confirm('Anda yakin akan hapus?')">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    onclick="return  alert('Hanya bisa delete data pendaftar dan belum bisa delete dokumennya, dokumen masih akan tersimpan di aplikasi karena pengembangan belum selesai!')"
                                                                    class="block px-4 py-[7px] text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                    <div class="flex items-center justify-end w-28 mx-auto">
                                                                        <iconify-icon icon="ant-design:delete-filled"
                                                                            class="text-xl mr-1"></iconify-icon>
                                                                        <p class="">Delete</p>
                                                                    </div>
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <br>
                        <div class="flex items-center justify-end">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px">
                                    <li>
                                        <a href="#"
                                            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.index')
@section('content')
    <div class="text-center w-full ml-0 bg-gray-100 pb-20 min-h-screen sm:pl-[260px]">
        {{-- navbar profile --}}
        @include('layout.profile')

        <div class="w-auto p-3 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg mx-7 mt-11 ">
            <h1 class="font-sans text-lg font-bold text-black">DATA PENDAFTAR SEMINAR PROPOSAL</h1>
        </div>

        <!-- CARD -->
        <div class="container pb-8 my-5 px-7 mt-7">
            <div class="relative overflow-x-auto bg-white border rounded-lg">
                <div class="flex w-full">
                    <!-- <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full"> -->
                    <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                        @if (Auth::user()->level == 'Mahasiswa')
                            <div class="flex justify-start">
                                @if (count($datas) >= 1)
                                    <button
                                        onclick="return alert('Tidak dapat melakukan pendaftaran, pendaftaran telah terbuat sebelumnya')"
                                        class="text-white flex item-center bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-[3px] px-4 py-2.5 my-5 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">
                                        <p class="px-2"> Tambah data</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M11 13v3q0 .425.288.713T12 17q.425 0 .713-.288T13 16v-3h3q.425 0 .713-.288T17 12q0-.425-.288-.713T16 11h-3V8q0-.425-.288-.713T12 7q-.425 0-.713.288T11 8v3H8q-.425 0-.713.288T7 12q0 .425.288.713T8 13h3Zm1 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                        </svg>
                                    </button>
                                @else
                                    <a href="/proposal/create"
                                        class="text-white flex item-center bg-cyan-600 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-[3px] px-4 py-2.5 my-5 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800">
                                        <p class="px-2"> Tambah data</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M11 13v3q0 .425.288.713T12 17q.425 0 .713-.288T13 16v-3h3q.425 0 .713-.288T17 12q0-.425-.288-.713T16 11h-3V8q0-.425-.288-.713T12 7q-.425 0-.713.288T11 8v3H8q-.425 0-.713.288T7 12q0 .425.288.713T8 13h3Zm1 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        @endif

                        <div class="mb-3 overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                    <tr>
                                        @if (Auth::user()->level == 'Mahasiswa')
                                            <th scope="col" class="px-2 py-2 font-medium">
                                                Status
                                            </th>
                                        @else
                                            <th scope="col" class="px-2 py-2 font-medium">
                                                No
                                            </th>
                                        @endif
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            Nama Mahasiswa
                                        </th>
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            NIM
                                        </th>
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            Status Mahasiswa
                                        </th>
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            Judul Proposal
                                        </th>
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            Pembimbing 1 / Pembimbing 2
                                        </th>
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            Tgl Acc Pembimbing 1 / Pembimbing 2
                                        </th>
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            No.Hp
                                        </th>
                                        @if (Auth::user()->level == 'Mahasiswa')
                                        @else
                                            <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                                Status
                                            </th>
                                        @endif
                                        <th scope="col" class="px-2 py-2 font-medium border-l-2 border-gray-200">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr
                                            class="text-left text-slate-700 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            @if (Auth::user()->level == 'Mahasiswa')
                                                <td class="px-2.5 py-2">
                                                    <div class="px-3 py-1 bg-pink-400 text-black rounded">
                                                        {{ $data->status }}
                                                    </div>
                                                </td>
                                            @else
                                                <th scope="row"
                                                    class="px-3 py-2.5 text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}
                                                </th>
                                            @endif
                                            <td class="px-2.5 py-2">
                                                {{ $data->nama_mahasiswa }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $data->nim }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $data->status_mahasiswa }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $data->judul_proposal }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $data->pembimbing1 }} <br>
                                                - <br>
                                                {{ $data->pembimbing2 }}
                                            </td>
                                            <td class="px-2.5 py-2 text-center">
                                                {{ Carbon\Carbon::parse($data->tgl_accp1)->format('d-m-Y') }} <br>
                                                - <br>
                                                {{ Carbon\Carbon::parse($data->tgl_accp2)->format('d-m-Y') }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $data->no_hp }}
                                            </td>
                                            @if (Auth::user()->level == 'Mahasiswa')
                                            @else
                                                <td class="px-2.5 py-2 {{ $data->status == 'Terverifikasi' ? 'text-green-600 font-medium' : '' }}">                                                
                                                    {{ $data->status }}
                                                </td>
                                            @endif
                                            <td
                                                class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2.5 py-2 text-sm text-center text-gray-500">
                                                <button id="{{ $data->id }}"
                                                    data-dropdown-toggle="dropdown{{ $data->id }}"
                                                    class="inline-flex items-center px-3 py-2 text-sm text-center text-gray-800 border rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M7 12a2 2 0 1 1-4.001-.001A2 2 0 0 1 7 12zm12-2a2 2 0 1 0 .001 4.001A2 2 0 0 0 19 10zm-7 0a2 2 0 1 0 .001 
                                                4.001A2 2 0 0 0 12 10z" />
                                                    </svg>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown{{ $data->id }}"
                                                    class="right-0 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm font-medium text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownDefaultButton">
                                                        @if (Auth::user()->level == 'Mahasiswa')
                                                        @else
                                                            <li>
                                                                <a href="/proposal/{{ $data->id }}/edit"
                                                                    class="block px-4 py-[7px] text-green-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-center">
                                                                    <div class="flex items-center justify-end mx-auto w-28">
                                                                        <iconify-icon icon="tabler:edit"
                                                                            class="text-[18px] mr-2">
                                                                        </iconify-icon>
                                                                        <p class="text-sm">Edit</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        <li>
                                                            <a href="{{ url("/proposal/{$data->id}") }}"
                                                                class="block px-4 py-[7px] text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-end">
                                                                <div class="flex items-center justify-end mx-auto w-28">
                                                                    <iconify-icon icon="iconamoon:eye"
                                                                        class="text-[18px] mr-2"></iconify-icon>
                                                                    <p class="text-sm">Show</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("/proposal/hasilformproposal/{$data->id}") }}"
                                                                class="block px-4 py-[7px] text-orange-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-end">
                                                                <div class="flex items-center justify-end mx-auto w-28">
                                                                    <iconify-icon icon="ic:round-download"
                                                                        class="text-[20px] mr-2"></iconify-icon>
                                                                    {{-- <iconify-icon icon="iconamoon:eye"
                                                                        class="text-[18px] mr-2"></iconify-icon> --}}
                                                                    <p class="text-sm">Unduh Form</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        @if (Auth::user()->level == 'Mahasiswa')
                                                        @else
                                                            <li>
                                                                <form action="/proposal/{{ $data->id }}" method="POST"
                                                                    onsubmit="return confirm('Anda yakin akan hapus?')">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit"
                                                                        onclick="return  alert('Hanya bisa delete data pendaftar dan belum bisa delete dokumennya, dokumen masih akan tersimpan di aplikasi karena pengembangan belum selesai!')"
                                                                        class="block px-4 py-[7px] text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        <div
                                                                            class="flex items-center justify-end mx-auto w-28">
                                                                            <iconify-icon icon="ant-design:delete-filled"
                                                                                class="mr-1 text-xl"></iconify-icon>
                                                                            <p class="">Delete</p>
                                                                        </div>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        @endif
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

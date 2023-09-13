<section id="info" class="w-screen pt-15 h-fit">
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container max-w-screen-xl items-center justify-between mx-auto pt-2 px-3 sm:px-7">
        <p class=" font-semibold text-2xl  text-green-800 py-2 ">Informasi Jadwal </p>
        <div class="text-lg  text-green-800 py-2">
            </p>
            <div class="container pb-8 my-3 px-7 mt-7">
                <div class=" bg-white border rounded-lg">
                    <div class="flex flex-col w-full">
                        <!-- <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full"> -->
                        <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                            <div class="mb-3 overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <p><strong>Jadwal Seminar Proposal</strong></p>
                                        <tr>
                                            <th scope="col" class="px-3 py-4 font-medium">
                                                No
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Nama Mahasiswa

                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Waktu / Tanggal
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Tempat
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Ketua Tim Penguji
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Dosen Penguji
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr class="text-left text-slate-700 bg-white border-b ">

                                                <th scope="row" class="px-3 py-2.5 text-gray-900 whitespace-nowrap ">
                                                    {{ $loop->iteration }}
                                                </th>
                                                <td class="px-2.5 py-2">
                                                    {{ $data->nama_mahasiswa }}
                                                    <br>
                                                    <p class="text-xs">
                                                        {{ $data->nim }}
                                                    </p>
                                                </td>

                                                <td class="px-2.5 py-2 text-center">
                                                    {{ Carbon::parse($data->waktu)->format('H:i') }} /
                                                    {{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }}


                                                </td>
                                                <td class="px-2.5 py-2">
                                                    {{ $data->tempat }}
                                                </td>
                                                <td class="px-2.5 py-2">
                                                    {{ $data->ketua_tim }}
                                                </td>
                                                <td>
                                                    {{ $data->anggota }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                            <div class="mb-3 overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <p><strong>Jadwal Ujian Skripsi</strong></p>
                                        <tr>
                                            <th scope="col" class="px-3 py-4 font-medium">
                                                No
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Nama Mahasiswa

                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Waktu / Tanggal
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Tempat
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Ketua Tim Penguji
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Dosen Peenguji
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr class="text-left text-slate-700 bg-white border-b ">

                                                <th scope="row" class="px-3 py-2.5 text-gray-900 whitespace-nowrap ">
                                                    {{ $loop->iteration }}
                                                </th>
                                                <td class="px-2.5 py-2">
                                                    {{ $data->nama_mahasiswa }}
                                                    <br>
                                                    <p class="text-xs">
                                                        {{ $data->nim }}
                                                    </p>
                                                </td>

                                                <td class="px-2.5 py-2 text-center">
                                                    {{ Carbon::parse($data->waktu)->format('H:i') }} /
                                                    {{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }}


                                                </td>
                                                <td class="px-2.5 py-2">
                                                    {{ $data->tempat }}
                                                </td>
                                                <td class="px-2.5 py-2">
                                                    {{ $data->ketua_tim }}
                                                </td>
                                                <td>
                                                    {{ $data->anggota }}
                                                    <br> {{ $data->anggota }}
                                                    <br> {{ $data->anggota }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


</section>

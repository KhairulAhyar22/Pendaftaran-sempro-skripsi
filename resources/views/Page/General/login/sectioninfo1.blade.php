{{-- <section id="info" class="w-screen pt-12 h-fit ">
    @php
        use Carbon\Carbon;
    @endphp
    <div class="max-w-screen-xl items-center justify-between mx-auto pt-2 px-4 mb-3 ">
        <div class="flex flex-col lg:p-4 p-4  mb-3 rounded-[5px] w-full">
            <div class="mb-8 ">
                <p class="text-xl pb-4 text-center text-white"><strong>Jadwal Sminar Proposal</strong></p>
                <div class="flex flex-row justify-between">
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">senin</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = senin tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">selasa</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = selasa tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">rabu</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = rabu tgl pekan ini -->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">kamis</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = kamis tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">jumat</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = jumat tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">sabtu</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = sabtu tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mb-2 ">
                <p class="text-xl pb-6 text-center text-white"><strong>Jadwal Ujian Skripsi</strong></p>
                <div class="flex flex-row justify-between">
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">senin</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = senin tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">selasa</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = selasa tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">rabu</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = rabu tgl pekan ini -->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">kamis</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = kamis tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">jumat</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = jumat tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                        <p class="uppercase text-white text-lg font-bold text-center pb-0">sabtu</p>
                        <p class="uppercase text-sm text-white text-center pb-4">Tanggal</p>
                        @foreach ($datas as $data)
                            <!--tambah kondisi : data yang ditampilkan, hanya yang di field waktu = sabtu tgl pekan ini --->
                            <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50 ">
                                <div class=" flex flex-row  ">
                                    <p class="text-xl font-black p-2 ">{{ $loop->iteration }} </p>
                                </div>
                                <div class=" items-center">
                                    <p class="uppercase text-black text-[10px] font-semibold">{{ $data->nama_mahasiswa }}</p>
                                    <p class="uppercase text-black text-[9px]">NIM:
                                        {{ $data->nim }} </p>
                                    <p class="text-emerald-700 text-[9px] font-semibold">
                                        {{ Carbon::parse($data->waktu)->format('H:i') }}
                                        <i class="text-orange-700">| {{ $data->tempat }} </i>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="info" class="w-screen pt-12 h-fit">
    @php
        use Carbon\Carbon;
    @endphp
    <div class="max-w-screen-xl items-center justify-between mx-auto pt-2 px-4 mb-3">
        <div class="flex flex-col lg:p-4 p-4 mb-3 rounded-[5px] w-full">
            <div class="mb-10">
                <p class="text-xl pb-4 text-center text-white"><strong>Jadwal Seminar Proposal</strong></p>
                <div class="flex flex-row justify-between">
                    @php
                        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    @endphp

                    @foreach ($daysOfWeek as $day)
                        <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                            @php
                                $dayName = \Carbon\Carbon::parse($day)->isoFormat('dddd');
                                $datasForDayS = $datasByDateS[$day] ?? [];

                                // Hitung tanggal berdasarkan hari dalam loop
                                $today = Carbon::now();
                                $dayOfWeek = Carbon::parse($day);
                                $daysDiff = $dayOfWeek->dayOfWeek - $today->dayOfWeek;
                                $formattedDate = $today->addDays($daysDiff)->format('d M Y');
                            @endphp

                            <p class="uppercase text-white text-lg font-bold text-center pb-0">{{ $dayName }}</p>
                            <p class="uppercase text-sm text-white text-center pb-4">
                                {{ $formattedDate }}
                            </p>
                            @if (count($datasForDayS) > 0)
                                @foreach ($datasForDayS as $data)
                                    <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-emerald-50">
                                        <div class="flex flex-row">
                                            <p class="text-xl font-black p-2">{{ $loop->iteration }}</p>
                                        </div>
                                        <div class="items-center">
                                            <p class="uppercase text-black text-[10px] font-semibold">
                                                {{ $data->nama_mahasiswa }}</p>
                                            <p class="uppercase text-black text-[9px]">NIM: {{ $data->nim }}</p>
                                            <p class="text-emerald-700 text-[9px] font-semibold">
                                                {{ \Carbon\Carbon::parse($data->waktu)->format('H:i') }}
                                                <i class="text-orange-700">| {{ $data->tempat }}</i>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-white text-center">Tidak Ada Jadwal</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-3">
                <p class="text-xl pb-4 text-center text-white"><strong>Jadwal Ujian Skripsi</strong></p>
                <div class="flex flex-row justify-between">
                    @php
                        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    @endphp

                    @foreach ($daysOfWeek as $day)
                        <div class="min-h-[300px] min-w-[190px] p-2 rounded-[5px] border border-emerald-50 shadow-md">
                            @php
                                $dayName = \Carbon\Carbon::parse($day)->isoFormat('dddd');
                                $datasForDayU = $datasByDateU[$day] ?? [];

                                // Hitung tanggal berdasarkan hari dalam loop
                                $today = Carbon::now();
                                $dayOfWeek = Carbon::parse($day);
                                $daysDiff = $dayOfWeek->dayOfWeek - $today->dayOfWeek;
                                $formattedDate = $today->addDays($daysDiff)->format('d M Y');
                            @endphp

                            <p class="uppercase text-white text-lg font-bold text-center pb-0">{{ $dayName }}</p>
                            <p class="uppercase text-sm text-white text-center pb-4">
                                {{ $formattedDate }}
                            </p>
                            @if (count($datasForDayU) > 0)
                                @foreach ($datasForDayU as $data)
                                    <div class="flex flex-row gap-2 items-center my-1 shadow rounded-md bg-orange-100">
                                        <div class="flex flex-row">
                                            <p class="text-xl font-black p-2">{{ $loop->iteration }}</p>
                                        </div>
                                        <div class="items-center">
                                            <p class="uppercase text-black text-[10px] font-semibold">
                                                {{ $data->nama_mahasiswa }}</p>
                                            <p class="uppercase text-black text-[9px]">NIM: {{ $data->nim }}</p>
                                            <p class="text-emerald-700 text-[9px] font-semibold">
                                                {{ \Carbon\Carbon::parse($data->waktu)->format('H:i') }}
                                                <i class="text-orange-700">| {{ $data->tempat }}</i>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-white text-center">Tidak Ada Jadwal</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


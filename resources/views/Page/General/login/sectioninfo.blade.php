<section id="info" class="w-screen pt-15 h-fit">
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container items-center justify-between max-w-screen-xl px-3 pt-2 mx-auto sm:px-7">
        <p class="py-2 text-2xl font-semibold text-green-800 ">Informasi Jadwal </p>
        <div class="py-2 text-lg text-green-800">
            </p>
            <div class="container pb-8 my-3 px-7 mt-7">
                <div class="bg-white border rounded-lg ">
                    <div class="flex flex-col w-full">
                        <!-- <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full"> -->
                        <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                            <div class="mb-3 overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-sm text-center text-gray-100 bg-emerald-700">
                                        <p>Jadwal Seminar Proposal</p>
                                        <tr>
                                            <th scope="col" class="px-3 py-4 font-medium">
                                                No
                                            </th>
                                            <th scope="col" class="px-3 py-4 font-medium border-l-2 border-gray-200">
                                                Nama Mahasiswa
<</th>                             
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
                                            <tr
                                                class="text-left bg-white border-b text-slate-700 ">

                                                <th scope="row"
                                                    class="px-3 py-2.5 text-gray-900 whitespace-nowrap ">
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
                                                   {{ Carbon::parse($data->waktu)->format('H:i') }} / {{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                                    
                                                    
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
                                        <p>Jadwal Ujian Skripsi</p>
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
                                    <tr>
                                        @foreach ($dataskrip as $item)
                                        <tr
                                            class="text-left bg-white border-b text-slate-700 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row"
                                                    class="px-3 py-2.5 text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}
                                                </th>
                                            <td class="px-2.5 py-2">
                                                {{ $item->nama_mahasiswa }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $item->nim }}
                                            </td>                                            
                                            <td class="px-2.5 py-2 text-center">
                                                {{ Carbon::parse($item->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }} /
                                                {{ Carbon::parse($item->waktu_mulai)->format('H:i') }} s/d {{ Carbon::parse($item->waktu_selesai)->format('H:i') }} <span class="font-semibold">WITA</span>
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $item->tempat }}
                                            </td>
                                            <td class="px-2.5 py-2">
                                                {{ $item->ketua_tim }} (Ketua Tim)
                                                
                                            </td>
                                            <td
                                                class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2.5 py-2 text-sm text-center text-gray-500">
                                                
                                                {{ $item->anggota1 }} (Anggota)
                                                {{ $item->anggota2 }} (Anggota)<br>
                                                {{ $item->anggota3 }} (Anggota)<br>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <!-- @foreach ($datas as $data)
                                            <tr
                                                class="text-left bg-white border-b text-slate-700 ">

                                                <th scope="row"
                                                    class="px-3 py-2.5 text-gray-900 whitespace-nowrap ">
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
                                                   {{ Carbon::parse($data->waktu)->format('H:i') }} / {{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                                    
                                                    
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
                                        @endforeach -->
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

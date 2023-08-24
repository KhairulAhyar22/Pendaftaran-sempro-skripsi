<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Seminar Proposal {{ $data->nama_mahasiswa }}-{{ $data->nim }}</title>
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
    <style>
        body {
            font-family: "Times New Roman", Times, serif !important;
        }
    </style>
</head>

<body class="bg-white">
    @php
        use Carbon\Carbon;
    @endphp
    {{-- format --}}
    <div class="bg-white items-center">
        <div class="mx-4 ">
            {{-- kop surat --}}
            <div class="flex items-center justify-between">
                <div class="w-28 ml-1 mr-1 h-full justify-start">
                    <img class="h-full w-auto" src="/img/logo.png" alt="">
                </div>
                <div class="w-auto h-auto text-center">
                    <p class="font-bold text-black text-[18px] leading-6 tracking-wide">UNIVERSITAS COKROAMINOTO PALOPO
                    </p>
                    <p class="font-bold text-black text-[18px] leading-6 tracking-wide">FAKULTAS TEKNIK KOMPUTER</p>
                    <p class="font-medium text-black text-[11px] tracking-wide leading-3 mt-1">Alamat: Jalan
                        Latamacelling
                        No. 19 Kampus 1 Gedung A Kota Palopo 91913 -
                        Sulawesi Selatan</p>
                    <p class="font-medium text-black text-[11px] tracking-wide leading-3">Telepon (0471) 326223, Fax
                        (0471) 325055 E-mail: prodiinformatika@uncp.ac.id Website: http://www.ftkom.uncp.ac.id</p>
                </div>
            </div>
            <hr class="border-[2px] border-opacity-100 border-black mt-1">
            <div class="flex justify-between mt-0">
                {{-- info ketua --}}
                <div class="flex text-[16px] text-black mt-2 text-left tracking-wide">
                    <div class="text-justify">
                        <p class="leading-4">Nomor</p>
                        <p class="leading-4">Lamp.</p>
                        <p class="leading-4">Hal</p>
                    </div>
                    <div class="ml-10 mr-1">
                        <p class="leading-4">:</p>
                        <p class="leading-4">:</p>
                        <p class="leading-4">:</p>
                    </div>
                    <div>
                        <a href="" class="leading-4">
                            <p>-</p>
                        </a>
                        <a href="" class="leading-4">
                            <p>-</p>
                        </a>
                        <a href="" class="leading-4 font-semibold underline">
                            <p>Undangan Tim Penguji Skripsi</p>
                        </a>
                    </div>
                </div>
                <div class="text-[16px]">
                    {{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM') }}
                </div>
            </div>
            <div class="flex text-[16px] text-black mt-2 text-left w-full tracking-wide">
                <div class="text-justify">
                </div>
                <div class="ml-[85px] mt-4 mr-1 w-full">
                    <p class="leading-4">Kepada Yth:</p>
                    <div class="flex justify-between w-full">
                        <div class="text-justify">
                            <ul class="list-decimal ml-4">
                                <li>{{ $data->ketua_tim }}</li>
                                <li>{{ $data->anggota1 }}</li>
                                <li>{{ $data->anggota2 }}</li>
                                <li>{{ $data->anggota3 }}</li>
                            </ul>
                        </div>
                        <div class="text-justify">
                            <p>(Ketua Tim)</p>
                            <p>(Anggota)</p>
                            <p>(Anggota)</p>
                            <p>(Anggota)</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="text-justify">Di,-</p>
                        <p class="text-justify ml-5">Tempat</p>

                    </div>
                </div>
            </div>
            <div class="flex text-[16px] text-black mt-2 text-left w-full tracking-wide">
                <div>

                    <p class="text-justify"></p>
                    <p class="text-justify mt-5 italic">Assalamualaikum wr. wb.</p>
                    <p class="text-justify">Kami sampaikan dengan hormat bahwa sehubungan dengan pelaksanaan ujian
                        skripsi mahasiswa berikut:</p>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-center text-gray-700">
                            <tr>
                                <th scope="col" class="px-2 font-medium border border-gray-600">
                                    NO
                                </th>
                                <th scope="col" class="px-2 font-medium border border-gray-600">
                                    Nama Mahasiswa
                                </th>
                                <th scope="col" class="px-2 font-medium border border-gray-600">
                                    NIM
                                </th>
                                <th scope="col" class="px-2 font-medium border border-gray-600">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="text-left text-slate-700 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-2.5 border border-gray-600">
                                    1
                                </td>
                                <td class="px-2.5 border border-gray-600">
                                    {{ $data->nim }}
                                </td>
                                <td class="px-2.5 border border-gray-600">
                                    {{ $data->nama_mahasiswa }}
                                </td>
                                <td class="px-2.5 border border-gray-600">
                                    {{ $data->waktu_mulai }} - {{ $data->waktu_selesai }} WITA
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="text-justify">Maka kami mengundang bapak/ibu untuk menghadiri dan menguji hasil proposal
                        dari
                        mahasiswa tersebut. Adapun pelaksanaannya akan dilaksanakan pada:

                    </p>

                    {{-- detail jadwal --}}
                    <div class="flex ml-7 text-[16px] text-black my-3 text-left tracking-wide">
                        <div class="text-justify">
                            <p class="text-justify">Hari/Tanggal</p>
                            <p class="text-justify">Waktu</p>
                            <p class="text-justify">Tempat</p>
                        </div>
                        <div class="ml-10 mr-1">
                            <p class="text-justify">:</p>
                            <p class="text-justify">:</p>
                            <p class="text-justify">:</p>
                        </div>
                        <div>
                            <a href="" class="text-justify">
                                <p>{{ Carbon::parse($data->tanggal)->locale('id')->isoFormat('dddd, D MMMM') }}</p>
                            </a>
                            <a href="" class="text-justify">
                                <p>{{ Carbon::parse($data->waktu_mulai)->format('H:i') }} -
                                    {{ Carbon::parse($data->waktu_selesai)->format('H:i') }} WITA</p>
                            </a>
                            <a href="" class="text-justify">
                                <p>{{ $data->tempat }}</p>
                            </a>
                        </div>
                    </div>


                    <p class="text-justify">Kehadiran Bapak/Ibu sangat diharapkan tepat pada waktunya. Seminar
                        proposal
                        dapat
                        dilaksanakan apabila semua dosen penguji telah hadir diruangan.
                    </p>
                    <p class="text-justify">Demikian undangan ini, atas perhatian dan kerjasamanya kami ucapkan
                        terima
                        kasih.
                    </p>

                    <div class="grid grid-cols-2 mt-5">
                        <div>
                            <p>Mengetahui,</p>
                            <p>Dekan Fakultas Teknik Komputer</p>
                        </div>
                        <div>
                            <p>Ketua Program Studi <br> Informatika</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mt-20">
                        <div>
                            <p>Nirsal, S.Kom., M.Kom</p>
                        </div>
                        <div>
                            <p>Vicky Bin Djusmin, S.Kom., M.Kom</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- mahasiswa --}}
        <div class="ml-4 text-base text-black mt-2 text-left font-normal tracking-wide">

            {{-- Tembusan --}}
            <div class="text-base text-black font-normal mt-5 tracking-wide">
                <p>Tembusan disampaikan dengan hormat kepada:</p>
            </div>
            <div class="flex text-base text-black mt-1 text-left font-normal tracking-wide">
                <div class="mr-4">
                    <p>1.</p>
                    <p>2.</p>
                    <p>3.</p>
                    <p>4.</p>
                </div>
                <div class="text-justify">
                    <p>Rektor</p>
                    <p>Dekan</p>
                    <p>Ketua Prodi</p>
                    <p>Arsip</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    {{-- Icon Iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script>
        window.print();
    </script>
</body>

</html>

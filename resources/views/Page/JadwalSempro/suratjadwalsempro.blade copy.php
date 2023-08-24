<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="bg-white">
    {{-- format --}}
    <div class="bg-white items-center">
        <div class="mx-16 ">
            {{-- kop surat --}}
            <div class="flex items-center justify-between">
                <div class="w-20 ml-1 mr-1 h-auto justify-start">
                    <img class="h-auto w-auto" src="/img/logo.png" alt="">
                </div>
                <div class="w-auto h-auto text-center">
                    <p class="font-bold text-black text-[16px] tracking-wide">UNIVERSITAS COKROAMINOTO PALOPO</p>
                    <p class="font-bold text-black text-[16px] tracking-wide">FAKULTAS TEKNIK KOMPUTER</p>
                    <p class="font-bold text-black text-[16px] tracking-wide">PROGRAM STUDI INFORMATIKA/p>
                    <p class="font-medium text-black text-xs tracking-wide">Alamat: Jalan Latamacelling No. 19 Gedung A Lt. I Kota Palopo 91921 -
                        Sulawesi Selatan</p>
                    <p class="font-medium text-black text-xs tracking-wide">Telp/Fax (0471) 3200907/(0471) 325055 E-mail: ftkom@uncp.ac.id Website: http://www.ftkom.uncp.ac.id</p>
                </div>
            </div>
            <hr class="border-[2px] border-opacity-100 border-black mt-1 mb-2">
            {{-- Ket Surat --}}
            <div class="text-center">
                <p class="font-bold text-black text-base tracking-wide">SURAT TUGAS</p>
                <hr class="border-[1px] border-opacity-100 border-black ml-[218px] mr-[218px]">
                <p class="text-black text-base font-normal tracking-wide">Nomor: </p>
            </div>

            <div class="pt-4 ">
                <p class="text-base text-black tracking-wide">Yang bertanda tangan di bawah ini:</p>
            </div>
            {{-- info ketua --}}
            <div class="ml-4 flex text-base text-black mt-2 text-left tracking-wide">
                <div class="">
                    <p>NIDN</p>
                    <p>Jabatan</p>
                    <p>Nama</p>
                </div>
                <div class="ml-20 mr-1">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div>
                    <a href="">
                        <p>-</p>
                    </a>
                    <a href="">
                        <p>-</p>
                    </a>
                    <a href="">
                        <p>-</p>
                    </a>
                </div>
            </div>

            <div class="pt-4 tracking-wide">
                <p class="text-base">Menugaskan kepada saudara:</p>
            </div>
            {{-- new --}}
            <div class="pt-2 tracking-wide">
                <p class="text-base">Melibatkan:</p>
            </div>
            {{-- mahasiswa --}}
            <div class="ml-4 flex text-base text-black mt-2 text-left font-normal tracking-wide">
                <div class="mr-4">
                   
                <div class="mr-14">
                   -
                </div>
                <div class="mr-7">
                    <p>(Mahasiswa)</p>
                    <p>(Mahasiswa)</p>
                </div>
            </div>
            {{-- perihal surat --}}
            <div class="text-justify text-base text-black font-normal mt-2 tracking-wide">
                <p>Untuk melakukan penelitian yang berjudul <span></p>
            </div>
            <div class="text-left text-base text-black font-normal mt-2 tracking-wide">
                <p>Demikian Surat Tugas ini dibuat untuk dapat digunakan sebagaimana mestinya.</p>
            </div>
            {{-- tanda tangan ketua lppm --}}
            <div class="flex items-center justify-end text-base text-black mt-5 tracking-wide">
                <div>
                    <p>Palopo, </p>
                    <p class="font-bold mb-[70px] mt-3">Plt Ketua LPPM</p>
                    <P class="font-bold">-</P>
                    <p>NIDN.</p>
                </div>
            </div>
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
                <div class="">
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

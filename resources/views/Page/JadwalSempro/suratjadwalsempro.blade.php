<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="bg-white">
    {{-- format --}}
    <div class="bg-white items-center">
        <div class="mx-10 ">
            {{-- kop surat --}}
            <div class="flex items-center justify-between">
                <div class="w-32 ml-1 mr-1 h-full justify-start">
                    <img class="h-full w-auto" src="/img/logo.png" alt="">
                </div>
                <div class="w-auto h-auto text-center">
                    <p class="font-bold text-black text-[16px] tracking-wide">UNIVERSITAS COKROAMINOTO PALOPO</p>
                    <p class="font-bold text-black text-[16px] tracking-wide">FAKULTAS TEKNIK KOMPUTER</p>
                    <p class="font-bold text-black text-[16px] tracking-wide">PROGRAM STUDI INFORMATIKA</p>
                    <p class="font-medium text-black text-[11px] tracking-wide leading-3">Alamat: Jalan Latamacelling
                        No. 19 Kampus 1 Gedung A Kota Palopo 91913 -
                        Sulawesi Selatan</p>
                    <p class="font-medium text-black text-[11px] tracking-wide leading-3">Telepon (0471) 326223, Fax
                        (0471) 325055 E-mail: prodiinformatika@uncp.ac.id Website: http://www.ftkom.uncp.ac.id</p>
                </div>
            </div>
            <hr class="border-[2px] border-opacity-100 border-black mt-1">
            <div class="flex justify-between mt-0">
                {{-- info ketua --}}
                <div class="flex text-sm text-black mt-2 text-left tracking-wide">
                    <div class="">
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
                            <p>Undangan Penguji Seminar Proposal</p>
                        </a>
                    </div>
                </div>
                <div class="text-sm">
                    Palopo, 02 Maret 2023
                </div>
            </div>
            <div class="flex text-sm text-black mt-2 text-left w-full tracking-wide">
                <div class="">
                </div>
                <div class="ml-[85px] mt-4 mr-1 w-full">
                    <p class="leading-4">Kepada Yth:</p>
                    <div class="flex justify-between w-full">
                        <div class="">
                            <ul class="list-decimal ml-12">
                                <li>Vicky Bin Djusmin</li>
                                <li>Suparman</li>
                            </ul>
                        </div>
                        <div class="">
                            <p>(Ketua Tim)</p>
                            <p>(Anggota)</p>
                        </div>
                    </div>
                    <p class="">Di,-</p>
                    <p class="">Tempat</p>
                    <p class=""></p>
                    <p class="">Assalamualaikum wr. wb.</p>
                    <p class="">Kami sampaikan dengan hormat bahwa sehubungan dengan pelaksanaan seminar proposal mahasiswa berikut:</p>
                    <p class=" ml-10">ISHAM MAULANA/190</p>
                    <p class="">Maka kami mengundang bapak/ibu untuk menghadiri dan menguji hasil proposal dari mahasiswa tersebut. Adapun pelaksanaannya akan dilaksanakan pada:

                    </p>

                </div>
            </div>

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

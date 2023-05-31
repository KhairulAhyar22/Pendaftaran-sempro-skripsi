<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/3.1.0/iconify.min.js" integrity="sha512-E5zagJczGRm5vRd4acej4RtUFCBd8JDedgljicTgnZrwLYzu4/GvImQ6VtJfxAtnPluq1b3tPNaz9yNuTKWQzw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link href="asset/css/fontawesome.css" rel="stylesheet">
    <link href="asset/css/all.css" rel="stylesheet"

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./CSS/UploafField.css"> -->

    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" /> -->
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

        </head>
        @include('layout.sidebar')   
<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700"></nav>
    
<div class="sm:mx-64  rounded-[40px] w-[1262px]">
    <!-- <div class="flex items-center justify-center h-48 mb-4 rounded-[2px] bg-green-800 dark:bg-gray-800">
    </div> -->
    <div class="bg-green-800 h-52 pr-20 pt-7 w-full ">
    <div class="flex justify-end items-center">
    <div class="text-white text-sm">
        <div class="pr-6 text-right">
            <span>Halo, Selamat Datang</span> <br>
            <span class="font-bold">(Admin)</span>
        </div>
    </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
    </div>
</div>

    <div class="-mt-11 ml-8 lg:p-2 border-b-2 rounded-lg bg-yellow-300 border-gray-300 shadow-lg h-16 w-auto ">
        <h1 class="p-3 font-sans text-lg text-black font-bold">PERSYARATAN SEMINAR PROPOSAL</h1>
    </div>
<div class="border p-10 shadow-xl bg-gray-50 mx-28 my-12 rounded-md grid grid-cols-2 gap-0 md:grid md:grid-cols-3 md:gap-0">
    <div class="col-span-2">
        <div class="py-3">
            <p class="text-lg"> Hasil cetak/print KRS berjalan dan telah ditanda tangani oleh ketua program studi </p>
            <input type="file"class="border border-gray-500 w-full rounded">
        </div>

        <div class="py-3">
            <p class="text-lg"> Fotocopy kartu konsultasi yang memiliki keterangan telah disetujui oleh kedua pembimbing dan telah menghadiri minimal 10 seminar penelitian.</p>
            <input type="file" class="border border-gray-500 w-full rounded">
        </div>

        <div class="py-3">
            <p class="text-lg"> Fotocopy KHS.</p>
            <input type="file" class="border border-gray-500 w-full rounded">
        </div>

        <div class="py-3">
            <p class="text-lg"> Hasi cetak/print KRS sementara berjalan dan tekah ditanda tangani oleh kedua program studi.</p>
            <input type="file" class="border border-gray-500 w-full rounded">
        </div>

        <div class="py-3">
            <p class="text-lg"> Srat keterangan lunas SPP.</p>
            <input type="file" class="border border-gray-500 w-full rounded">
        </div>

        <div class="py-3">
            <p class="text-lg"> Fotocopy slip pembayaran semster berjalan.</p>
            <input type="file" class="border border-gray-500 w-full rounded">
        </div>

        <div class="py-3">
            <p class="text-lg"> Mengumpulkan 2 rangkap proposal yang telah dijilid (warna merah)</p>
            <input type="file" class="border border-gray-500 w-full rounded">
        </div>
      
    <div class="flex justify-end">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 
                font-medium rounded-xl text-sm px-5 py-2.5 text-center mr-2 my-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload File
        </button>
    </div>
    </div>
    
    
    <div>

    </div>
</div>
<!-- <div class="bg-white w-[1050px] h-full -mt-24 ml-8 rounded-lg p-5">
    <div class="grid grid-cols-4 gap-1 w-full px-7 mt-8">
    </div>
</div> -->

</html>

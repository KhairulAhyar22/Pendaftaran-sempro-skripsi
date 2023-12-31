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

<div class="h-screen bg-gray-100 sm:ml-64 ">
    <!-- <div class="flex items-center justify-center h-48 mb-4 rounded-[2px] bg-green-800 dark:bg-gray-800">
    </div> -->
    <div class="w-full h-40 pr-20 bg-green-800 pt-7 ">
    <div class="flex items-center justify-end">
    <div class="text-sm text-white">
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

    <div class="w-auto h-16 ml-8 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg -mt-11 lg:p-2 shadow-gray-400 ">
        <h1 class="p-3 font-sans text-lg font-bold text-black">PERSYARATAN YUDISIUM</h1>
    </div>
<div class="grid grid-cols-2 gap-0 p-10 my-12 border rounded-md shadow-xl bg-gray-50 mx-28 md:grid md:grid-cols-3 md:gap-0">
    <div class="col-span-2"</div>

    <div class="py-5">
            <p class="text-lg"> Biodata Power Point</p>
            <input type="file" class="w-full border border-gray-500 rounded">
        </div>
   
    <div class="flex justify-end">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 
                font-medium rounded-xl text-sm px-5 py-2.5 text-center mr-2 my-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload File
        </button>
    </div>
</div>
<!-- <div class="bg-white w-[1050px] h-full -mt-24 ml-8 rounded-lg p-5">
    <div class="grid w-full grid-cols-4 gap-1 mt-8 px-7">
    </div>
</div> -->

</html>

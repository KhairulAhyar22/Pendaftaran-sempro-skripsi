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
    
<div class="sm:ml-64 rounded-[40px]">
    <!-- <div class="flex items-center justify-center h-48 mb-4 rounded-[2px] bg-green-800 dark:bg-gray-800">
    </div> -->
    <div class="bg-green-800 h-40 pr-20 pt-7 w-full">
    @include('layout.profile')

    <!-- <div class="bg-yellow-300 w-[1190px] h-full -mt-11 ml-8 rounded-lg p-5 shadow-lg">
        <p class = "font-sans text-lg font-bold ">PENDAFTARAN SEMINAR PROPOSAL</p>
    </div> -->

    <div class="-mt-11 ml-8 lg:p-2 border-b-2 rounded-lg bg-yellow-300 border-gray-300 shadow-lg h-16 w-auto ">
        <h1 class="p-3 font-sans text-lg text-black font-bold">PENDAFTARAN SEMINAR PROPOSAL</h1>
    </div>

{{-- FORM --}}
                                <!-- <form action="/createpinjam" method="POST">
                                   
                                </form> -->
                                <div class="border p-5 shadow-xl bg-gray-50 mx-28 my-12 rounded-md grid grid-cols-2 gap-0 md:grid md:grid-cols-3 md:gap-0">
                                    <div class="col-span-2"</div>
                                        <div>
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                                        </div>
                                        <br>
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim">
                                        </div>
                                        <br>
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Proposal</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Judul">
                                        </div>
                                        <br>
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pembimbing 1</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Pembimbing 1">
                                        </div>
                                        <br>
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pembimbing 2</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Pembimbing 2">
                                        </div>
                                        <br>
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Acc Pembimbing 1</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Tanggal">
                                        </div>
                                        <br>
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Acc Pembimbing 2</label>
                                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Tanggal">
                                        </div>
                                        <br>
                                        <div>
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 
                                            font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 my-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                                        </button>
                                        </div>
                                    
                                    </div>
                                </div>
        </div>
</div>

</html>

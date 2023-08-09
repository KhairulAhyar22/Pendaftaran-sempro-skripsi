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

    <div class="sm:ml-64 bg-gray-100 rounded-lg">
    <!-- <div class="flex items-center justify-center h-48 mb-4 rounded-[2px] bg-green-800 dark:bg-gray-800">
    </div> -->
        <div class="bg-green-800 h-40 pr-20 pt-7 w-full">
        @include('layout.profile')

    <!-- <div class="bg-yellow-300 w-[1190px] h-full -mt-11 ml-8 rounded-lg p-5 shadow-lg">
        <p class = "font-sans text-lg font-bold ">PENDAFTARAN SEMINAR PROPOSAL</p>
    </div> -->

            <div class="mt-16 mx-28 lg:p-2 rounded-lg bg-green-500 shadow-lg shadow-gray-400 h-16 w-auto ">
                 <h1 class="p-2 font-sans text-lg text-slate-800 font-bold">TAMBAH DATA PENDAFTARAN SEMINAR PROPOSAL</h1>
            </div>

{{-- FORM --}}
                                <div class="border px-20 py-10 shadow-lg shadow-gray-500 bg-white mx-28 my-8 rounded-md grid grid-cols-2 gap-0 md:grid md:grid-cols-3 md:gap-0">
                                    <div class="col-span-2" </div>
                                        <div>
                                            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                                            <input type="text" id="small-input" class="block w-full p-1.5 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 md:text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                                        </div>
                                        <br>

                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">NIM</label>
                                            <input type="text" id="small-input" class="block w-full p-1.5 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 md:text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim">
                                        </div>
                                        <br>

                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                            <fieldset>
                                                    <legend class="sr-only">Countries</legend>
                                                    <div class="flex items-center mb-4">
                                                        <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                                        <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">L</label>
                                                    </div>

                                                    <div class="flex items-center mb-4">
                                                        <input id="country-option-2" type="radio" name="countries" value="Germany" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">P</label>
                                                    </div>
                                                </fieldset>
                                                                                
                                        <div class="mr-">
                                            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Judul Proposal</label>
                                            <input type="text" id="small-input" class="block w-full p-1.5 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 
                                            md:text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="Judul">
                                        </div>
                                        <br>

                                        <div>
                                            <label for="" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Pembimbing Utama (1)</label>
                                            <select id="" required name="" class="border-gray-300 block w-full 
                                                    px-2 md:py-1.5 py-1 mb-1 text-md text-gray-900 border rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                                                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected value=""></option>
                                                <option value="Nirsal, S,Kom., M.Pd.">Nirsal, S,Kom., M.Pd.</option>
                                                <option value="Supriadi, S.Ag., M.Pd.">Supriadi, S.Ag., M.Pd.</option>
                                                <option value="Shindy Eka wati, S.Pd., M.Pd.">Shindy Eka wati, S.Pd., M.Pd.</option>
                                                <option value="Vicky Bin Djusmin, S.Kom., M.Kom.">Vicky Bin Djusmin, S.Kom., M.Kom.</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>

                                        <br>
                                        <div>
                                            <label for="" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Pembimbing Pendamping (2)</label>
                                            <select id="" required name="" class="border-gray-300 block w-full 
                                                    px-2 md:py-1.5 py-1 mb-1 text-md text-gray-900 border rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                                                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected value=""></option>
                                                <option value="Nirsal, S,Kom., M.Pd.">Nirsal, S,Kom., M.Pd.</option>
                                                <option value="Supriadi, S.Ag., M.Pd.">Supriadi, S.Ag., M.Pd.</option>
                                                <option value="Shindy Eka wati, S.Pd., M.Pd.">Shindy Eka wati, S.Pd., M.Pd.</option>
                                                <option value="Vicky Bin Djusmin, S.Kom., M.Kom.">Vicky Bin Djusmin, S.Kom., M.Kom.</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <br>

                                        <div>
                                            <label for="" class="block mb-1 text-md font-medium text-gray-900 dark:text-white">Tanggal Acc Proposal Pembimbing Utama (1)</label>
                                            <div class="relative">
                                                <input type="date" required id="" name=""  class="border-gray-200  bg-white border 
                                                text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 md:py-1.5
                                                 py-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                                dark:focus:border-blue-500" placeholder="Select date">
                                            </div>
                                        </div>
                                        <br>

                                        <div>
                                            <label for="" class="block mb-1 text-md font-medium text-gray-900 dark:text-white">Tanggal Acc Proposal Pembimbing Pendamping (2)</label>
                                            <div class="relative">
                                                <input type="date" required id="" name=""  class="border-gray-200  bg-white border 
                                                 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full px-2 md:py-1.5
                                                 py-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                                dark:focus:border-blue-500" placeholder="Select date">
                                            </div>
                                        </div>
                                        <br>

                                        <div>
                                            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">No. HP</label>
                                            <input type="text" id="small-input" class="block w-full p-1.5 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 md:text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. HP">
                                        </div>
                                       
                                        <div class="flex justify-end">
                                            <button type="button" class="text-white flex item-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg 
                                                    py-2 px-3 my-8 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><p class="px-2"> Tambah</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477
                                                    2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2zm5 9h-4V7h-2v4H7v2h4v4h2v-4h4v-2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        </div>
                                    
                                    </div>
                                </div>
        </div>
</div>

</html>

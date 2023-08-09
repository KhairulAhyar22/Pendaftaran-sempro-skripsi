<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>
    <title>Document</title>
</head>
<body>
    <div
        class="absolute top-0 bottom-0 left-0 flex items-center justify-center w-full h-full overflow-hidden leading-5 bg-yellow-400 bg-gradient-to-b from-yellow-400 via-green-600 to-yellow-400">
        <div class="w-full overflow-hidden text-gray-500 bg-gray-100 shadow-xl rounded-3xl" style="max-width:800px">
        <div class="w-full">
            <div class="w-full px-5 py-10 md:px-16">
                <div class="mb-10 text-center">
                    <h1 class="text-xl font-bold text-gray-900 md:text-3xl">REGISTRASI</h1>
                   
                </div>
                <div>
                    <div class="flex -mx-3">
                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="px-1 text-sm font-semibold">Masukkan Nama Lengkap</label>
                            <div class="flex">
                                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                                <input type="text" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="nama">
                            </div>
                        </div>
                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="px-1 text-sm font-semibold">NIM</label>
                            <div class="flex">
                                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-account-outline"></i></div>
                                <input type="text" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="nim">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="px-1 text-sm font-semibold">Email</label>
                            <div class="flex">
                                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-email-outline"></i></div>
                                <input type="email" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="email">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="px-1 text-sm font-semibold">Password</label>
                            <div class="flex">
                                <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-lock-outline"></i></div>
                                <input type="password" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-400 rounded-lg outline-none focus:border-indigo-500" placeholder="************">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs px-3 py-3 mx-auto font-semibold text-white bg-indigo-500 rounded-lg hover:bg-indigo-700 focus:bg-indigo-700">BUAT AKUN</button>
                             <p class="flex items-center justify-center pt-4 text-gray-500">Sudah memiliki akun? Login <a href="#"
                                class="pl-1 text-sm font-semibold text-blue-700 hover:text-blue-700"> Di Sini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

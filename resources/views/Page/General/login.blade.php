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
<div
	class="absolute top-0 bottom-0 left-0 w-full h-full overflow-hidden leading-5 bg-yellow-400 bg-gradient-to-b from-yellow-400 via-green-600 to-yellow-400">
	
</div>
    <div class="relative justify-center min-h-screen bg-transparent shadow-xl sm:flex sm:flex-row rounded-3xl">
        <div class="z-10 flex flex-col self-center lg:px-14 sm:max-w-4xl xl:max-w-md">
            <div class="flex-col self-start hidden text-gray-200 sm:flex">
                <img class= "w-52 h-52 ml-7"src="img/uncpp.png">
                <h1 class="my-3 text-4xl font-semibold">Selamat Datang</h1>
                <p class="pr-3 text-sm opacity-75">Sistem Informasi Program Studi Informatika Fakultas Komputer Universitas Cokroaminoto Palopo</p>
            </div>
        </div>
	<div class="z-10 flex self-center justify-center">
		<div class="p-12 mx-auto bg-white rounded-3xl w-96 ">
			<div class="mb-7">
				<h3 class="text-2xl font-bold text-slate-800-800">Silahkan Login </h3>
				
			</div>
			<div class="space-y-6">
				<div class="">
				<input class="w-full px-4 py-3 text-sm bg-gray-200 border border-gray-400 rounded-lg focus:bg-gray-100 focus:outline-none focus:border-purple-400" type="email" placeholder="Masukkan NIM">
              </div>

					<div class="relative" x-data="{ show: true }">
						<input placeholder="Password" :type="show ? 'password' : 'text'" class="w-full px-4 py-3 text-sm bg-gray-200 border border-gray-400 rounded-lg text-black-200 focus:bg-gray-100 focus:outline-none focus:border-purple-400">
						<div class="absolute inset-y-0 right-0 flex items-center mr-3 text-sm leading-5"></div>
					</div>

					    <div class="flex items-center justify-between"></div>
					<div>
						<button type="submit" class="flex justify-center w-full p-3 font-semibold tracking-wide text-gray-100 transition duration-300 ease-in bg-green-800 rounded-lg cursor-pointer hover:bg-yellow-400">Login
                    </button>
                    <p class="pt-4 text-gray-400">Belum memiliki akun? Registrasi <a href="#"
                                class="pl-1 text-sm font-semibold text-blue-700 hover:text-blue-700"> Di Sini</a></p>
					</div>
					
				
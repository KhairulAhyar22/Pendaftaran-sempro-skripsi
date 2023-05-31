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
<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
</nav>
    
<div class="sm:ml-64 rounded-[40px]">
    <!-- <div class="flex items-center justify-center h-48 mb-4 rounded-[2px] bg-green-800 dark:bg-gray-800">
    </div> -->
    <div class="bg-green-800 h-40 pr-20 pt-7 w-full">
    @include('layout.profile')

    <div class="-mt-11 ml-8 lg:p-2 border-b-2 rounded-lg bg-yellow-300 border-gray-300 shadow-lg h-16 w-auto ">
        <h1 class="p-3 font-sans text-lg text-black font-bold">JADWAL SEMINAR PROPOSAL</h1>
    </div>

<!-- DATA TABEL -->
<div class="container p-10 pb-8 md:px-8 lg:px-11">
                    <div class="relative overflow-x-auto bg-white shadow-md rounded-[3px]">
                        <div class="w-full flex">
                            <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
								<div class="flex justify-between  mb-4 mt-[0px]">
									<div></div>
									<form class="flex items-center" action="/laporanPeminjaman" method="get">
										<label for="simple-search" class="sr-only">Search</label>
										<div class="relative w-full">
											<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
												<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
											</div>
											<input type="text" id="simple-search" name="search" value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
										</div>
										<button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border hover:bg-[#ffd102] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
											<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
											<span class="sr-only">Search</span>
										</button>
									</form>
								</div>

                            	<div class="relative overflow-x-auto mb-3">
									<table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
										<thead class="text-sm text-gray-700 bg-gray-300 text-center dark:bg-gray-700 dark:text-gray-400">
											<tr>
												<th scope="col" class="px-4 py-4">
													No
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Nama Mahasiswa
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Judul Proposal
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Tanggal Acc Pembimbing 1 & 2
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Nama Pembimbing 1 & 2
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Aksi
												</th>
											</tr>
										</thead>
										<tbody>
												<tr class="bg-white border-b text-black text-left dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
													<th scope="row" class="px-3 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    1
													</th>
													<td class="px-3 py-2 font-medium">
                                                        iren kirana 
													</td>
													<td class="px-3 py-2 font-medium">
                                                        Rancang Bangun Sistem Informasi Pendaftaran Seminar Proposal, Skripsi dan Yudisium 
                                                        pada Program Studi Informatika, Fakultas Teknik Komputer Universitas Cokroaminoto Palopo
													</td>
													<td class="px-3 py-2 font-medium">
													    01/01/2023 & 03/01/2023 
													</td>
													<td class="px-3 py-2 font-medium">
                                                        Nirsal, S.Kom., M.Pd. & Supriadi, S.Ag., M.Pd.
													</td>
					                                <td class = "px-3 py-2 font-medium text-right border-slate-200 relative flex items-center justify-center">
                                                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-[3px] text-sm 
                                                    px-2 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Verifikasi</button>

                                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-[3px] text-sm 
                                                    px-[16px] py-[8px] mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cetak</button>
                                                    </td>
												</tr>
										</tbody>
									</table>
								</div>
               
                                <br>
                                <div class = "flex justify-end items-center">
                                <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px">
                                    <li>
                                    <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                    </li>
                                    <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                    </li>
                                    <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                    </li>
                                    <li>
                                    <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                    </li>
                                    <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->

</html>

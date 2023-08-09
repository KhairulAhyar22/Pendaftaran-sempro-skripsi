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

<div class="h-screen bg-gray-100 sm:ml-64">
    
    <div class="w-full h-40 pr-20 bg-green-800 pt-7">
    @include('layout.profile')

    <div class="w-auto h-16 ml-8 bg-yellow-300 border-b-2 border-gray-300 rounded-lg shadow-lg -mt-11 lg:p-2 ">
        <h1 class="p-3 font-sans text-lg font-bold text-black">JADWAL SEMINAR PROPOSAL</h1>
    </div>

<!-- DATA TABEL -->
<div class="container p-10 pb-8 md:px-8 lg:px-11">
                    <div class="relative overflow-x-auto bg-white">
                        <div class="flex w-full">
                            <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
								<div class="flex justify-between  mb-4 mt-[0px]">
									
								</div>

                            	<div class="relative mb-3 overflow-x-auto border rounded-md shadow-lg shadow-gray-400">
									<table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
										<thead class="text-sm text-center text-gray-700 bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
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
												<tr class="text-left text-black bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
					                                <td class = "relative flex items-center justify-center px-3 py-2 font-medium text-right border-slate-200">
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
                                <div class = "flex items-center justify-end">
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

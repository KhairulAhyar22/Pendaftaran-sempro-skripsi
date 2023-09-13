<section id="pendaftaran" class="w-screen py-10 pb-52">
    <ul
        class="container max-w-screen-xl items-center justify-between mx-auto px-3 sm:px-7 flex flex-row gap-5 pt-10 mt-10 h-fit">
        <li>
            @if (count($proposal) >= 1)
                <div class="w-full">
                    <a onclick="return alert('Tidak dapat melakukan pendaftaran, pendaftaran telah terbuat sebelumnya')"
                        class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                        <svg class="w-6 h-6 text-green-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-green-600 dark:text-white">Daftar
                            Proposal
                        </p>
                    </a>
                </div>
            @else
                <div class="w-full">
                    <a href="/proposal/create/mhs"
                        class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                        <svg class="w-6 h-6 text-green-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-green-600 dark:text-white">Daftar
                            Proposal
                        </p>
                    </a>
                </div>
            @endif
        </li>
        <li>


            @if (count($skripsi) >= 1)
                <div class="w-full">
                    <a onclick="return alert('Tidak dapat melakukan pendaftaran, pendaftaran telah terbuat sebelumnya')"
                        class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                        <svg class="w-6 h-6 text-yellow-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-yellow-600 dark:text-white">Daftar
                            Skripsi
                        </p>
                    </a>
                </div>
            @else
                <div class="w-full">
                    <a href="/skripsi/create/mhs"
                        class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                        <svg class="w-6 h-6 text-yellow-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-yellow-600 dark:text-white">Daftar
                            Skripsi
                        </p>
                    </a>
                </div>
            @endif
        </li>
        <li>
            <!-- KALAU SELESAI DI ATUR STATUS PENDAFTARANNYA AKTIFKAN YG INI -->
            {{-- <div class="w-full">
                @if ($skripsi != 'selesai' && $proposal != 'selesai')
                    <a onclick="return alert('Pendaftaran yudisium hanya dapat dilakukan apa bila telah selesai ujian skripsi')"
                        class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Daftar
                            Yudisium</p>
                    </a>
                @else
                    <button id="daftaryudis" data-dropdown-toggle="dropdownyudis"
                        class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                            viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Daftar
                            Yudisium</p>
                    </button>
                    <div id="dropdownyudis" class="w-screen ">
                        <div class="container max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-3 sm:px-7"
                            aria-labelledby="dropdownDefaultButton">
                            <div class="bg-slate-50 rounded-md p-2 my-2 w-full">
                                <p class="text-center font-bold text-lg uppercase">Pendaftaran Yudisium</p>
                                <div class="mb-3 px-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="file_PPT_yudis">Upload PPT</label>
                                    <input name="file_PPT_yudis"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_PPT_yudis_help" id="file_PPT_yudis" type="file">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_PPT_yudis_help">
                                        Gunakan template PPT yudisium yang di sediakan, jika belum ada, silahkan
                                        download <i class="text-blue-700 font-semibold"><a
                                                href="#">disini!</a></i></p>
                                    @error('file_PPT_yudis')
                                        <div class="text-xs text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div> --}}
            <!-- INI YANG BELUM AKTIF KONDISI IF STATUSNYA -->
            <div class="w-full">
                <button id="daftaryudis" data-dropdown-toggle="dropdownyudis"
                    class=" flex flex-row items-center p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 w-96 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none"
                        viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                    </svg>
                    <p class="ml-2 mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Daftar
                        Yudisium</p>
                </button>
                <div id="dropdownyudis" class="w-screen ">
                    <div class="container max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-3 sm:px-7"
                        aria-labelledby="dropdownDefaultButton">
                        <div class="bg-slate-50 rounded-md p-2 my-2 w-full">
                            <p class="text-center font-bold text-lg uppercase">Pendaftaran Yudisium</p>
                            <div class="mb-3 px-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_PPT_yudis">Upload PPT</label>
                                <input name="file_PPT_yudis"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_PPT_yudis_help" id="file_PPT_yudis" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_PPT_yudis_help">
                                    Gunakan template PPT yudisium yang di sediakan, jika belum ada, silahkan
                                    download <i class="text-blue-700 font-semibold"><a href="#">disini!</a></i>
                                </p>
                                @error('file_PPT_yudis')
                                    <div class="text-xs text-red-500">{{ $message }}</div>
                                @enderror
                                <button type="submit" class="rounded mt-2 px-4 bg-emerald-800" >
                                    <p class="p-2 text-center  text-slate-50 ">Daftar</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

<div class="rounded-[40px]">
    <div class="w-full px-10 bg-gray-200 py-7 ">
        <div class="flex items-center justify-end">
            <div class="text-sm text-white">
                <div class="px-6 text-right text-gray-900 ">
                    <span>Halo, Selamat Datang</span> <br>
                    <span class="font-bold">({{ auth()->user()->username }})</span>
                </div>
            </div>

            <div id="logoutdrop" data-dropdown-toggle="dropdown1"
                class=" hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:hover:bg-blue-700 dark:hover:text-white dark:focus:ring-blue-800">
                <iconify-icon icon="ic:sharp-account-circle" width="35" height="35"></iconify-icon>
            </div>
            <!-- Dropdown menu -->
            <div id="dropdown1"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 right-0">
                <ul class="py-2 text-sm font-medium text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownDefaultButton">
                    @if (auth()->user()->level == 'Prodi')
                        <li>
                            <a href="/buatakun"
                                class="block px-4 py-[7px] text-green-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-center"
                                target="_blank">
                                <div class="flex items-center justify-end w-28 mx-auto">
                                    <iconify-icon icon="tabler:edit" class="text-[18px] mr-2">
                                    </iconify-icon>
                                    <p class="text-sm">Buat Akun</p>
                                </div>
                            </a>
                    @endif
                    </li>
                    <li>
                        <a href="/logout"
                            class="block px-4 py-[7px] text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white justify-end">
                            <div class="flex items-center justify-end w-28 mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5Zm13-6v-3h-7v-2h7V8l5 4l-5 4Z" />
                                </svg>
                                <p class="text-sm ml-2">Logout</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>



        </div>
    </div>
</div>

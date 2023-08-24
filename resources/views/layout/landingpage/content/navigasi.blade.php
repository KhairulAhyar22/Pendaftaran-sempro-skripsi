<nav class="bg-dark-green fixed top-0 left-0 w-screen z-50 drop-shadow">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4  py-2">
        <div class="flex items-end ">
            <div class="">
                <a href="/" class="flex items-center">
                    <img class="w-10" src="/img/logo.png" alt="Profile Image">
                </a>
            </div>

        </div>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-screen md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4  items-center rounded-lg  md:flex-row md:space-x-8 md:mt-0 ">
                <li>
                    <a href="#home"
                        class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        Home</a>
                </li>
                <li>
                    <a href="#pendaftaran"
                    class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pendaftaran</a>
                </li>
                    <li>
                        <a href="#info"
                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Info</a>
                    </li>
                <li>
                    <div class="text-white text-center items-center">
                        <button id="" data-dropdown-toggle="dropdown"
                                    class="inline-flex items-center px-3 py-2 text-sm text-center  "
                                    type="button">
                                    <i class="fas fa-user-circle fa-lg"></i>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                    class="right-0 z-10 hidden bg-dark-green divide-y divide-gray-100 hover:bg-green-700 rounded-lg shadow w-36 ">
                                    <ul class="py-2 text-sm font-medium text-gray-700 "
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="/logout"
                                                class="block px-4 py-[7px] text-white hover:bg-green-700  justify-center">
                                                <div class="flex items-center justify-center mx-auto w-28">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <p class="text-sm">Logout</p>
                                                </div>
                                            </a>
                                        </li>
                                        

                                    </ul>
                                </div>
                        
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

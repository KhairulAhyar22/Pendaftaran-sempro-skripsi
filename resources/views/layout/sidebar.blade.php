<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>
<aside id="default-sidebar"
    class="fixed top-0 left-0 shadow-lg bg-emerald-700 z-40 w-[260px] h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto mt-5">
        <div class="mb-8 ml-3 font-bold text-white">
            <a href="#" class="flex items-center justify-center">
                <img class="w-20 mr-2" src="/img/logo.png" alt="Profile Image">
                <span class="pt-2 space-y-0 text-left">UNIVERSITAS COKROAMINOTO PALOPO</span>
            </a>
        </div>
        <hr class="border-[1px] border-opacity-50 border-slate-300 w-full">
        <div class="h-full px-6 py-6 overflow-y-auto ">
            <ul class="space-y-2 font-medium text-sm">
                <li>
                    <a href="/dashboard"
                        class="flex items-center py-2 text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 22 22">
                            <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
                        </svg>
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/proposal"
                        class="flex items-center py-2 text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 17h9M8 15l-2.5 3L4 17m7-5h9M8 10l-2.5 3L4 12m7-5h9M8 5L5.5 8L4 7" />
                        </svg>
                        <span class="ml-2">Kelola Seminar Proposal</span>
                    </a>
                </li>
                <li>
                    <a href="/skripsi"
                        class="flex items-center py-2 text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 4.25q.325 0 .537-.213t.213-.537q0-.325-.213-.537T12 2.75q-.325 0-.537.213t-.213.537q0 .325.213.537T12 4.25ZM18 23q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23Zm-.5-2h1v-2.5H21v-1h-2.5V15h-1v2.5H15v1h2.5V21ZM7 9h10V7H7v2Zm4.675 12H3V3h6.2q.325-.9 1.088-1.45T12 1q.95 0 1.713.55T14.8 3H21v8.7q-.725-.35-1.463-.525T18 11q-.275 0-.513.013t-.487.062V11H7v2h6.125q-.45.425-.813.925T11.675 15H7v2h4.075q-.05.25-.063.488T11 18q0 .825.15 1.538T11.675 21Z" />
                        </svg>
                        <span class="ml-2">Kelola Ujian Skripsi</span>
                    </a>
                </li>
                <!-- KELOLA JADWAL -->
                <li class="list-none ">
                    <button type="button"
                        class="flex items-center text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                        aria-controls="dropdown-menu-jadwal" data-collapse-toggle="dropdown-menu-jadwal"
                        onclick="toggleDropdown('dropdown-menu-jadwal', 'dropdown-icon-jadwal')">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M14 22v-2.125l5.15-5.175l2.15 2.1l-5.175 5.2H14Zm8.025-5.9L19.9 13.975l1.4-1.4l2.125 2.125l-1.4 1.4ZM2 20V4h8l2 2h10v2.9L11.075 20H2Z" />
                            </svg>
                        </div>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap " sidebar-toggle-item>Kelola jadwal</span>
                        <svg id="dropdown-icon-jadwal"xmlns="http://www.w3.org/2000/svg" class="" width="28"
                            height="28" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 14.975q-.2 0-.388-.075t-.312-.2l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062Z" />
                        </svg>
                    </button>
                    <ul id="dropdown-menu-jadwal" class="hidden ">
                        <li class="p-1.5 list-none">
                            {{-- <a href="/jadwalseminar_admin" --}}
                            <a href="/jadwal/seminarproposal"
                                class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group hover:bg-emerald-800 hover:text-black">Seminar</a>
                        </li>
                        <li class="p-1.5 list-none">
                            <a href="/jadwalskripsi_admin"
                                class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800 hover:text-black">Skripsi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <form action="/logout">
                        @csrf
                        <button type="submit" onclick="return confirm ('Yakin ingin keluar')"
                            class="flex items-center py-2 mt-64  gap-x h-[50px] px-4 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5Zm13-6v-3h-7v-2h7V8l5 4l-5 4Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                            </a>
                    </form>
                </li>
            </ul>
        </div>
</aside>
<script>
    function toggleDropdown(menuId, iconId) {
        const dropdown = document.getElementById(menuId);
        const dropdownIcon = document.getElementById(iconId);
        dropdown.classList.toggle('hidden');
        dropdownIcon.classList.toggle('rotate-180');
    }
</script>
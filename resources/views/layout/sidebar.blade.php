<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 bg-green-800 shadow-inner z-40 w-[280px] h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
<div class="max-w-screen-xl mt-5 flex flex-wrap items-center justify-between mx-auto">
    <div class="ml-3 text-white font-bold mb-8">
        <a href="#" class="flex items-center justify-center">
         <img class="w-20 mr-2" src="img/logo.png" alt="Profile Image"> 
         <span class="text-left pt-2 space-y-0">UNIVERSITAS COKROAMINOTO PALOPO</span>
        </a>
    </div>
    <hr class="border-[1px] border-opacity-50 border-slate-300 w-full">
   <div class="h-full py-6 px-8 overflow-y-auto ">
      <ul class="space-y-2 font-medium">
        
         <li>
            <a href="/dahsboard" class="flex items-center py-2 text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 22 22"><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/></svg>
            <span class="ml-2">Dashboard</span>
            </a>
         
         <!--KELOLA PENDAFTARAN  -->
         <li class="list-none  ">
            <button type="button"
                class="flex items-center text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                aria-controls="dropdown-menu-pendaftaran" data-collapse-toggle="dropdown-menu-pendaftaran"
                onclick="toggleDropdown('dropdown-menu-pendaftaran', 'dropdown-icon-pendaftaran')">
                <div>
                    <!-- <i id="icon-menu" class="fa-solid fa-file-lines"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 21q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h11l5 5v11q0 .825-.588 1.413T19 21H5Zm2-4h10v-2H7v2Zm0-4h10v-2H7v2Zm8-4h4l-4-4v4ZM7 9h5V7H7v2Z"/>
                    </svg>
                </div>
                <span class="flex-1 ml-3 text-left whitespace-nowrap " sidebar-toggle-item>Kelola Pendaftaran</span>
                <!-- <i id="dropdown-icon-pendaftaran" class="fa-solid fa-caret-down"></i>
                 -->
                 <svg id="dropdown-icon-pendaftaran"xmlns="http://www.w3.org/2000/svg" class="" width="28" height="28" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12 14.975q-.2 0-.388-.075t-.312-.2l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062Z"/>
                  </svg>
            </button>
            <ul id="dropdown-menu-pendaftaran" class="hidden ">
                <li class="p-1.5 list-none">
                    <a href="/seminar"
                        class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group  hover:bg-green-800 hover:text-black rounded-[5px]">Seminar</a>
                </li>
                <li class="p-1.5 list-none">
                    <a href="/skripsi"
                        class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group  hover:bg-green-800 hover:text-black rounded-[5px]">Skripsi</a>
                </li>
                <li class="p-1.5 list-none">
                    <a href="/yudisium"
                        class="flex items-center w-full text-white  transition duration-75 rounded-lg pl-11 group hover:bg-green-800 hover:text-black rounded-[5px]">Yudisium</a>
                </li>
            </ul>
        </li>

        <!-- KELOLA PERSYARATAN -->
        <li class="list-none  ">
            <button type="button"
                class="flex items-center text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                aria-controls="dropdown-menu-persyaratan" data-collapse-toggle="dropdown-menu-persyaratan"
                onclick="toggleDropdown('dropdown-menu-persyaratan', 'dropdown-icon-persyaratan')">
                <div>
                    <!-- <i id="icon-menu" class="fa-solid fa-file-lines"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5.55 19L2 15.45l1.4-1.4l2.125 2.125l4.25-4.25l1.4 1.425L5.55 19Zm0-8L2 7.45l1.4-1.4l2.125 2.125l4.25-4.25l1.4 1.425L5.55 11ZM13 17v-2h9v2h-9Zm0-8V7h9v2h-9Z"/>
                    </svg>
                </div>
                <span class="flex-1 ml-3 text-left whitespace-nowrap " sidebar-toggle-item>Kelola persyaratan</span>
                <!-- <i id="dropdown-icon-persyaratan" class="fa-solid fa-caret-down"></i>
                 -->
                <svg id="dropdown-icon-persyaratan"xmlns="http://www.w3.org/2000/svg" class="" width="28" height="28" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 14.975q-.2 0-.388-.075t-.312-.2l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062Z"/>
                </svg>
            </button>
            <ul id="dropdown-menu-persyaratan" class="hidden ">
                <li class="p-1.5 list-none">
                    <a href="/syaratseminar_admin"
                        class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group  hover:bg-green-800 hover:text-black rounded-[5px]">Seminar</a>
                </li>
                <li class="p-1.5 list-none">
                    <a href="/syaratskripsi_admin"
                        class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group  hover:bg-green-800 hover:text-black rounded-[5px]">Skripsi</a>
                </li>
                <li class="p-1.5 list-none">
                    <a href="/syaratskripsi_admin"
                        class="flex items-center w-full text-white  transition duration-75 rounded-lg pl-11 group hover:bg-green-800 hover:text-black rounded-[5px]">Yudisium</a>
                </li>
            </ul>
        </li>

        <!-- KELOLA JADWAL -->
        <li class="list-none  ">
            <button type="button"
                class="flex items-center text-white gap-x h-[50px] px-2 hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                aria-controls="dropdown-menu-jadwal" data-collapse-toggle="dropdown-menu-jadwal"
                onclick="toggleDropdown('dropdown-menu-jadwal', 'dropdown-icon-jadwal')">
                <div>
                    <!-- <i id="icon-menu" class="fa-solid fa-file-lines"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M14 22v-2.125l5.15-5.175l2.15 2.1l-5.175 5.2H14Zm8.025-5.9L19.9 13.975l1.4-1.4l2.125 2.125l-1.4 1.4ZM2 20V4h8l2 2h10v2.9L11.075 20H2Z"/>
                    </svg>
                </div>
                <span class="flex-1 ml-3 text-left whitespace-nowrap " sidebar-toggle-item>Kelola jadwal</span>
                <!-- <i id="dropdown-icon-jadwal" class="fa-solid fa-caret-down"></i>
                 -->
                 <svg id="dropdown-icon-jadwal"xmlns="http://www.w3.org/2000/svg" class="" width="28" height="28" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12 14.975q-.2 0-.388-.075t-.312-.2l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062Z"/>
                  </svg>
            </button>
            <ul id="dropdown-menu-jadwal" class="hidden ">
                <li class="p-1.5 list-none">
                    <a href="/jadwalseminar_admin"
                        class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group  hover:bg-green-800 hover:text-black rounded-[5px]">Seminar</a>
                </li>
                <li class="p-1.5 list-none">
                    <a href="/jadwalskripsi_admin"
                        class="flex items-center w-full text-white transition duration-75 rounded-lg pl-11 group  hover:bg-green-800 hover:text-black rounded-[5px]">Skripsi</a>
                </li>
                
            </ul>
        </li>
              
        
         <li>
            <button type = "submit" onclick="return confirm ('Yakin ingin keluar')" class="flex items-center py-2 mt-80  gap-x h-[50px] px-4 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5Zm13-6v-3h-7v-2h7V8l5 4l-5 4Z"/></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
            </a>
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
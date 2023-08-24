<section id="pendaftaran" class="border p-5 py-14 ">
    <div class="lg:grid-cols-3 grid md:px-10 sm:grid-cols-2 grid-cols-1 gap-5">

        @if (count($proposal) >= 1)
            <a onclick="return alert('Tidak dapat melakukan pendaftaran, pendaftaran telah terbuat sebelumnya')"
                class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50">
                <svg class="w-6 h-6 text-green-600 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-green-600 dark:text-white">Daftar Proposal
                </h5>
            </a>
        @else
            <a href="/proposal/create/mhs"
                class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50">
                <svg class="w-6 h-6 text-green-600 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-green-600 dark:text-white">Daftar Proposal
                </h5>
            </a>
        @endif
        <a href="/skripsi/create/mhs"
            class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50">
            <svg class="w-6 h-6 text-yellow-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="18" height="20" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
            </svg>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-yellow-600 dark:text-white">Daftar Skripsi</h5>
        </a>
        <a onclick="return alert('Fitur daftar yudisium masih dalam tahap pengembangan')"
            class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="18" height="20" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
            </svg>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Daftar Yudisium</h5>
        </a>
    </div>
</section>

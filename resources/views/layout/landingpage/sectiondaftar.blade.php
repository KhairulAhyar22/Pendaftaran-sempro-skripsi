<section id="pendaftaran" class="">
    <div class="container py-5 max-w-screen-xl items-center justify-between mx-auto pt-14 pb-5 h-screen">
        <div class="w-full border  rounded-lg shadow bg-gray-800 ">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
                id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="mr-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
                        aria-selected="true"
                        class="inline-block p-3 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Seminar
                        Proposal</button>
                </li>
                <li class="mr-2">
                    <button id="services-tab" data-tabs-target="#services" type="button" role="tab"
                        aria-controls="services" aria-selected="false"
                        class="inline-block p-3 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Ujian
                        Skripsi</button>
                </li>
            </ul>
            <div id="defaultTabContent " class="py-4">
                <div class="hidden w-full bg-white rounded-lg md:px-4 dark:bg-gray-800" id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    @include('layout.landingpage.sectiondaftarsempro')
                </div>
                <div class="hidden w-full bg-white rounded-lg md:px-4 dark:bg-gray-800" id="services" role="tabpanel"
                    aria-labelledby="services-tab">
                    @include('layout.landingpage.sectiondaftarskripsi')
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pendaftaran" class="">
    <div class="container py-5 max-w-screen-xl items-center justify-between mx-auto pt-14 pb-5 h-fit">
        <div class="w-full border  rounded-lg shadow ">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-900 border-b border-gray-200 rounded-t-lg bg-gray-50  "
                id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="mr-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
                        aria-selected="true"
                        class="inline-block p-3 text-green-800 text-xl rounded-tl-lg  ">Seminar
                        Proposal</button>
                </li>
                <li class="mr-2">
                    <button id="services-tab" data-tabs-target="#services" type="button" role="tab"
                        aria-controls="services" aria-selected="false"
                        class="inline-block p-3 hover:text-green-800 text-xl  ">Ujian
                        Skripsi</button>
                </li>
                <li class="mr-2">
                    <button id="services-tab" data-tabs-target="#services2" type="button" role="tab"
                        aria-controls="services" aria-selected="false"
                        class="inline-block p-3 hover:text-green-800 text-xl  ">Yudisium</button>
                </li>
            </ul>
            <div id="defaultTabContent " class="py-4">
                <div class="hidden w-full bg-white rounded-lg md:px-4 " id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    @include('layout.landingpage.sectiondaftarsempro')
                </div>
                <div class="hidden w-full bg-white rounded-lg md:px-4 " id="services" role="tabpanel"
                    aria-labelledby="services-tab">
                    @include('layout.landingpage.sectiondaftarskripsi')
                </div>
                <div class="hidden w-full bg-white rounded-lg md:px-4 " id="services2" role="tabpanel"
                    aria-labelledby="services-tab">
                    @include('layout.landingpage.sectiondaftaryudisium')
                </div>
            </div>
        </div>
    </div>
</section>

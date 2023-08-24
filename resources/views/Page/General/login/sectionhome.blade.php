<section id="home" class="bg-cover w-screen" style="background-image: url('/Img/1.png'); ">
    <div class="container justify-betwen mx-auto px-4 min-h-screen  sm:flex sm:flex-row rounded-3xl">
        <div class="justify-center flex w-2/3">
            <div class="z-10 flex flex-col self-center lg:px-14 sm:max-w-4xl xl:max-w-md">
                <div class="flex-col self-start hidden px-5 text-gray-200 sm:flex">
                    <img class="w-52 h-52 ml-7" src="img/uncpp.png">
                    <h1 class="my-3 text-4xl font-semibold">Selamat Datang</h1>
                    <p class="pr-3 text-sm opacity-75">Sistem Informasi Program Studi Informatika Fakultas Komputer
                        Universitas
                        Cokroaminoto Palopo</p>
                </div>
            </div>
        </div>
        <div class="z-10 flex self-center justify-center px-5 mt-10 sm:mt-0 w-1/3">
            <div class="p-1">
                <div class="p-12 mx-auto bg-white rounded-3xl w-96 ">
                    <div class="mb-7">
                        <h3 class="text-2xl font-bold text-slate-800-800">Silahkan Login </h3>

                    </div>
                    <form action="/authenticate" method="post">
                        @csrf
                        @error('username')
                            <div class="text-red-400">{{ $message }}</div>
                        @enderror
                        @error('password')
                            <div class="text-red-400">{{ $message }}</div>
                        @enderror
                        <div class="space-y-6">
                            <div class="">
                                <input
                                    class="w-full px-4 py-3 text-sm bg-gray-200 border border-gray-400 rounded-lg focus:bg-gray-100 focus:outline-none focus:border-purple-400"
                                    type="text" placeholder="Username/NIM" name="username">
                            </div>

                            <div class="relative" x-data="{ show: true }">
                                <input placeholder="Password" type="password" name="password"
                                    class="w-full px-4 py-3 text-sm bg-gray-200 border border-gray-400 rounded-lg text-black-200 focus:bg-gray-100 focus:outline-none focus:border-purple-400">
                                <div class="absolute inset-y-0 right-0 flex items-center mr-3 text-sm leading-5">
                                </div>
                            </div>

                            <div class="flex items-center justify-between"></div>
                            <div>
                                <button type="submit"
                                    class="flex justify-center w-full p-3 font-semibold tracking-wide text-gray-100 transition duration-100 ease-in bg-green-800 rounded-lg cursor-pointer hover:bg-green-700">Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

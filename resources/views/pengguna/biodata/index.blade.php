<x-layout-pengguna>
    <section id="about" class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="wow fadeInUp bg-white" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <form action="{{ route('pengguna.biodata.store') }}" method="post"
                            class="items-center overflow-hidden border lg:flex">
                            @csrf
                            <span class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                Biodata
                            </span>
                            <div class="w-full p-10">
                                <div>
                                    <div class="wow fadeInUp rounded-lg bg-white py-10 px-8 shadow-testimonial sm:py-12 sm:px-10 md:p-[60px] lg:p-10 lg:py-12 lg:px-10 2xl:p-[60px]"
                                        data-wow-delay=".2s">
                                        <h3 class="mb-8 text-2xl font-semibold md:text-[26px]">
                                            Data Pemilik
                                        </h3>
                                        <div class="w-full max-w-lg">
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full px-3 mb-6 md:mb-0">
                                                    <label
                                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                        for="grid-first-name">
                                                        Nama Pemilik
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                        id="nama_pemilik" name="nama_pemilik" type="text">
                                                    @error('nama_pemilik')
                                                        <p class="text-red-500 text-xs italic">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full px-3 mb-6 md:mb-0">
                                                    <label
                                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                        for="grid-first-name">
                                                        No Handphone
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                        id="no_hp" name="no_hp" type="text">
                                                    @error('no_hp')
                                                        <p class="text-red-500 text-xs italic">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full px-3 mb-6 md:mb-0">
                                                    <label
                                                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                        for="grid-first-name">
                                                        Alamat
                                                    </label>
                                                    <textarea
                                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                        id="alamat" name="alamat" cols="10" rows="10"></textarea>
                                                    @error('alamat')
                                                        <p class="text-red-500 text-xs italic">{{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-10">
                                <div class="wow fadeInUp rounded-lg bg-white py-10 px-8 shadow-testimonial sm:py-12 sm:px-10 md:p-[60px] lg:p-10 lg:py-12 lg:px-10 2xl:p-[60px]"
                                    data-wow-delay=".2s">
                                    <h3 class="mb-8 text-2xl font-semibold md:text-[26px]">
                                        Data Kucing
                                    </h3>
                                    <div class="w-full max-w-lg">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-first-name">
                                                    Nama Kucing
                                                </label>
                                                <input
                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                    id="nama" name="nama_peliharaan" type="text">
                                                @error('nama_peliharaan')
                                                    <p class="text-red-500 text-xs italic">{{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-first-name">
                                                    Jenis Kelamin
                                                </label>
                                                <div class="relative">
                                                    <select
                                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                        name="jekel" id="jekel">
                                                        <option value="jantan">Jantan</option>
                                                        <option value="betina">Betina</option>
                                                    </select>
                                                    <div
                                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                        <svg class="fill-current h-4 w-4"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path
                                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                @error('jekel')
                                                    <p class="text-red-500 text-xs italic">{{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-first-name">
                                                    Umur Kucing (Bulan)
                                                </label>
                                                <input
                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                    id="umur" name="umur" type="number">
                                                <p class="text-red-500 text-xs italic">Jika tidak tahu boleh dikosongi.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-first-name">
                                                    Berat Kucing
                                                </label>
                                                <input
                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                    id="berat" name="berat" type="number">
                                                <p class="text-red-500 text-xs italic">Jika tidak tahu boleh dikosongi.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3 mb-6 md:mb-0">
                                                <label
                                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                    for="grid-first-name">
                                                    Suhu Kucing
                                                </label>
                                                <input
                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                    id="suhu" name="suhu" type="number">
                                                <p class="text-red-500 text-xs italic">Jika tidak tahu boleh dikosongi.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mb-0 text-center">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-dark">
                                    Kirim
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout-pengguna>

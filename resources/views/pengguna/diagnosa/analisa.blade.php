<x-layout-pengguna>
    <section class="relative z-20 overflow-hidden bg-[#f3f4ff] pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[620px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Hasil Diagnosa
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">
                            Pertanyaan? Jawaban
                        </h2>
                        <p class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed">
                            Pilihan Pengguna.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 ">
                    @foreach ($gejala as $key => $value)
                        @foreach ($kepastian as $key => $kp)
                            @if ($value->id == $key)
                                <div class="single-faq wow fadeInUp mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-5 sm:p-8"
                                    data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                                    <div class="w-full">
                                        <h4 class="text-base font-semibold text-black sm:text-lg">
                                            {{ $loop->iteration }}. {{ $value->nama }} ?
                                            <span class="font-normal">
                                                @if ($kp == 1)
                                                    Pasti
                                                @elseif($kp == 2)
                                                    Hampir pasti
                                                @elseif($kp == 3)
                                                    Mungkin
                                                @elseif($kp == 4)
                                                    Ragu-ragu
                                                @else
                                                    Tidak
                                                @endif
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)"></path>
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36"></stop>
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0"></stop>
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        @foreach ($penyakits as $penyakit)
            @if ($penyakit->id == array_key_first($cfHasil))
                <section class="bg-[#f3f4fe] pt-20">
                    <div class="container">
                        <div class="wow fadeInUp bg-white" data-wow-delay=".2s"
                            style="visibility: visible; animation-delay: 0.2s;">
                            <div class="-mx-4 flex flex-wrap">
                                <div class="w-full px-4">
                                    <div class="items-center justify-between overflow-hidden border lg:flex">
                                        <div
                                            class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                                            <span
                                                class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                                Hasil Diagnosa
                                            </span>
                                            <h2 class="mb-6 text-base font-medium text-dark">
                                                Berdasarkan daftar gejala yang dipilih, Penyakit yang diderita kucing
                                                peliharaan anda :
                                            </h2>
                                            <p
                                                class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                                                {{ $penyakit->nama }}
                                            </p>
                                            <p
                                                class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                                                Presentase : {{ $cfHasil[array_key_first($cfHasil)] * 100 }}%
                                            </p>
                                        </div>
                                        <div class="relative z-10 inline-block h-full">
                                            <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}"
                                                alt="{{ $penyakit->nama }}" alt="image" class="mx-auto lg:ml-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-[#f3f4fe] pt-20">
                    <div class="container">
                        <div class="wow fadeInUp bg-white" data-wow-delay=".2s"
                            style="visibility: visible; animation-delay: 0.2s;">
                            <div class="-mx-4 flex flex-wrap">
                                <div class="w-full px-4">
                                    <div class="items-start justify-between overflow-hidden border lg:flex">
                                        <div
                                            class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                                            <span
                                                class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                                Deskripsi penyakit
                                            </span>
                                            <h2 class="mb-6 text-base font-medium text-dark">
                                                {!! $penyakit->deskripsi !!}
                                            </h2>
                                        </div>
                                        <div
                                            class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                                            <span
                                                class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                                                Solusi penyakit
                                            </span>
                                            <h2 class="mb-6 text-base font-medium text-dark">
                                                {!! $penyakit->solusi !!}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
        <section class="bg-[#f3f4fe] pt-20">
            <div class="container">
                <div class="wow fadeInUp bg-white p-10 mb-5" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s;">
                    <span class="mb-5 inline-block bg-primary py-2 px-5 text-sm font-medium text-white">
                        Kemungkinan Penyakit Lain
                    </span>
                    <div class="flex flex-wrap">
                        <div class="w-full">
                            <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">
                                            Kemungkinan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">
                                            Presentase
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($cfHasil as $key => $cf)
                                        @foreach ($penyakits as $penyakit)
                                            @if ($key == $penyakit->id)
                                                @if ($i <= 3)
                                                    <tr>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text text-gray-800 dark:text-gray-200">
                                                            {{ $penyakit->nama }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text text-gray-800 dark:text-gray-200">
                                                            {{ $cf * 100 }}%
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</x-layout-pengguna>

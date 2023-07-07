<x-layout-pengguna>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="relative z-10 overflow-hidden bg-primary pb-[50px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="text-center space-y-5">
                        <h1 class="text-4xl font-semibold text-white">Detail Penyakit</h1>
                        <h2 class="wow fadeInUp mb-6 text-[26px] font-bold leading-snug inline-block bg-white py-2 px-5 text-dark sm:text-3xl sm:leading-snug md:text-4xl md:leading-snug"
                            data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                            {{ $penyakit->nama }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="wow fadeInUp relative z-20 mb-[60px] h-[300px] overflow-hidden rounded md:h-[400px] lg:h-[500px]"
                        data-wow-delay=".1s
              " style="visibility: visible; animation-delay: 0.1s;">
                        <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}" alt="image"
                            class="h-full w-full object-cover object-center">
                        <div
                            class="absolute top-0 left-0 z-10 flex h-full w-full items-end bg-gradient-to-t from-dark-700 to-transparent">
                            <div class="flex flex-wrap items-center p-4 pb-4 sm:p-8">
                                <div class="mb-4 mr-5 flex items-center md:mr-10">
                                    <p class="text-base font-medium text-white">
                                        By
                                        <a href="javascript:void(0)" class="text-white hover:opacity-70">
                                            Admin
                                        </a>
                                    </p>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <p class="mr-5 flex items-center text-sm font-medium text-white md:mr-8">
                                        <span class="mr-3">
                                            <svg width="15" height="15" viewBox="0 0 15 15" class="fill-current">
                                                <path
                                                    d="M3.8958 8.67529H3.10715C2.96376 8.67529 2.86816 8.77089 2.86816 8.91428V9.67904C2.86816 9.82243 2.96376 9.91802 3.10715 9.91802H3.8958C4.03919 9.91802 4.13479 9.82243 4.13479 9.67904V8.91428C4.13479 8.77089 4.03919 8.67529 3.8958 8.67529Z">
                                                </path>
                                                <path
                                                    d="M6.429 8.67529H5.64035C5.49696 8.67529 5.40137 8.77089 5.40137 8.91428V9.67904C5.40137 9.82243 5.49696 9.91802 5.64035 9.91802H6.429C6.57239 9.91802 6.66799 9.82243 6.66799 9.67904V8.91428C6.66799 8.77089 6.5485 8.67529 6.429 8.67529Z">
                                                </path>
                                                <path
                                                    d="M8.93779 8.67529H8.14914C8.00575 8.67529 7.91016 8.77089 7.91016 8.91428V9.67904C7.91016 9.82243 8.00575 9.91802 8.14914 9.91802H8.93779C9.08118 9.91802 9.17678 9.82243 9.17678 9.67904V8.91428C9.17678 8.77089 9.08118 8.67529 8.93779 8.67529Z">
                                                </path>
                                                <path
                                                    d="M11.472 8.67529H10.6833C10.5399 8.67529 10.4443 8.77089 10.4443 8.91428V9.67904C10.4443 9.82243 10.5399 9.91802 10.6833 9.91802H11.472C11.6154 9.91802 11.711 9.82243 11.711 9.67904V8.91428C11.711 8.77089 11.5915 8.67529 11.472 8.67529Z">
                                                </path>
                                                <path
                                                    d="M3.8958 11.1606H3.10715C2.96376 11.1606 2.86816 11.2562 2.86816 11.3996V12.1644C2.86816 12.3078 2.96376 12.4034 3.10715 12.4034H3.8958C4.03919 12.4034 4.13479 12.3078 4.13479 12.1644V11.3996C4.13479 11.2562 4.03919 11.1606 3.8958 11.1606Z">
                                                </path>
                                                <path
                                                    d="M6.429 11.1606H5.64035C5.49696 11.1606 5.40137 11.2562 5.40137 11.3996V12.1644C5.40137 12.3078 5.49696 12.4034 5.64035 12.4034H6.429C6.57239 12.4034 6.66799 12.3078 6.66799 12.1644V11.3996C6.66799 11.2562 6.5485 11.1606 6.429 11.1606Z">
                                                </path>
                                                <path
                                                    d="M8.93779 11.1606H8.14914C8.00575 11.1606 7.91016 11.2562 7.91016 11.3996V12.1644C7.91016 12.3078 8.00575 12.4034 8.14914 12.4034H8.93779C9.08118 12.4034 9.17678 12.3078 9.17678 12.1644V11.3996C9.17678 11.2562 9.08118 11.1606 8.93779 11.1606Z">
                                                </path>
                                                <path
                                                    d="M11.472 11.1606H10.6833C10.5399 11.1606 10.4443 11.2562 10.4443 11.3996V12.1644C10.4443 12.3078 10.5399 12.4034 10.6833 12.4034H11.472C11.6154 12.4034 11.711 12.3078 11.711 12.1644V11.3996C11.711 11.2562 11.5915 11.1606 11.472 11.1606Z">
                                                </path>
                                                <path
                                                    d="M13.2637 3.3697H7.64754V2.58105C8.19721 2.43765 8.62738 1.91189 8.62738 1.31442C8.62738 0.597464 8.02992 0 7.28906 0C6.54821 0 5.95074 0.597464 5.95074 1.31442C5.95074 1.91189 6.35702 2.41376 6.93058 2.58105V3.3697H1.31442C0.597464 3.3697 0 3.96716 0 4.68412V13.2637C0 13.9807 0.597464 14.5781 1.31442 14.5781H13.2637C13.9807 14.5781 14.5781 13.9807 14.5781 13.2637V4.68412C14.5781 3.96716 13.9807 3.3697 13.2637 3.3697ZM6.6677 1.31442C6.6677 0.979841 6.93058 0.716957 7.28906 0.716957C7.62364 0.716957 7.91042 0.979841 7.91042 1.31442C7.91042 1.649 7.64754 1.91189 7.28906 1.91189C6.95448 1.91189 6.6677 1.6251 6.6677 1.31442ZM1.31442 4.08665H13.2637C13.5983 4.08665 13.8612 4.34954 13.8612 4.68412V6.45261H0.716957V4.68412C0.716957 4.34954 0.979841 4.08665 1.31442 4.08665ZM13.2637 13.8612H1.31442C0.979841 13.8612 0.716957 13.5983 0.716957 13.2637V7.16957H13.8612V13.2637C13.8612 13.5983 13.5983 13.8612 13.2637 13.8612Z">
                                                </path>
                                            </svg>
                                        </span>
                                        {{ $penyakit->created_at->toFormattedDateString() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div>
                                {{-- <div class="w-full text-center">
                                    <h2 class="wow fadeInUp mb-6 text-[26px] font-bold leading-snug inline-block bg-primary py-2 px-5 text-white sm:text-3xl sm:leading-snug md:text-4xl md:leading-snug"
                                        data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                        {{ $penyakit->nama }}
                                    </h2>
                                </div> --}}
                                <h3 class="wow fadeInUp mb-8 text-2xl font-bold text-dark sm:text-[26px]"
                                    data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    Deskripsi
                                </h3>
                                <p class="wow fadeInUp mb-8 text-base leading-relaxed text-body-color"
                                    data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    {!! $penyakit->deskripsi !!}
                                </p>
                                <h3 class="wow fadeInUp mb-8 text-2xl font-bold text-dark sm:text-[26px]"
                                    data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    Solusi
                                </h3>
                                <p class="wow fadeInUp mb-10 text-base leading-relaxed text-body-color"
                                    data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    {!! $penyakit->solusi !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout-pengguna>

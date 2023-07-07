<x-layout-pengguna>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="relative z-10 overflow-hidden bg-primary  pb-[100px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold text-white">Info Penyakit</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                @foreach ($penyakit as $key => $value)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="wow fadeInUp group mb-10" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s;">
                            <div class="mb-8 overflow-hidden rounded">
                                <a href="{{ route('pengguna.penyakit.show', $value->slug) }}" class="block">
                                    <img src="{{ asset('assets/gambar/' . $value->gambar) }}" alt="image"
                                        class="object-cover h-96 w-full transition group-hover:rotate-6 group-hover:scale-125">
                                </a>
                            </div>
                            <div>
                                <span
                                    class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white">
                                    {{ $value->created_at->toFormattedDateString() }}
                                </span>
                                <h3>
                                    <a href="{{ route('pengguna.penyakit.show', $value->slug) }}"
                                        class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        {{ Str::title($value->nama) }}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    {!! Str::limit($value->deskripsi, 100) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout-pengguna>

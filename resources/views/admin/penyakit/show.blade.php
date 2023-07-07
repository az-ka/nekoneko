<x-layout-admin>
    <div class="card w-full p-6 bg-base-100 shadow-xl">
        <div class="bg-base-200">
            <h1 class="mb-5 text-3xl font-bold text-center pt-8">Detail Penyakit {{ $penyakit->nama }}</h1>
            <div class="hero">
                <div class="hero-content flex-col lg:flex-row">
                    <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}" alt="{{ $penyakit->nama }}"
                        class="max-w-sm rounded-lg shadow-2xl w-full" />
                    <div>
                        <div class="badge badge-neutral font-bold text-lg">#{{ $penyakit->id }}</div>
                        <h1 class="text-2xl font-bold">{{ $penyakit->nama }}</h1>
                        <p class="pt-6">
                            <span class="font-bold">Deskripsi</span>
                            <br>{!! $penyakit->deskripsi !!}
                        </p>
                        <p class="pt-3">
                            <span class="font-bold">Solusi</span>
                            <br>{!! $penyakit->solusi !!}
                        </p>
                        <a href={{ route('admin.penyakit.index') }} class="btn btn-primary my-6">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>

<x-layout-admin>
    <div class="card w-full p-6 bg-base-100 shadow-xl">
        <div class="text-xl font-semibold inline-block">
            Edit Penyakit
        </div>
        <div class="divider mt-2"></div>
        <div class="h-full w-full pb-6 bg-base-100">
            <form action="{{ route('admin.penyakit.update', $penyakit->id) }}" method="post"
                class="overflow-x-auto w-full" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Kode Penyakit</span>
                    </label>
                    <input type="text" @error('id') is-invalid @enderror" id="id" name="id"
                        value="{{ $penyakit->id }}" placeholder="Type here" class="input input-bordered w-full "
                        readonly>
                    @error('id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Nama Penyakit</span>
                    </label>
                    <input type="text" value="{{ $penyakit->nama }}" placeholder="Type here"
                        class="input input-bordered w-full " @error('nama') is-invalid @enderror" id="nama"
                        name="nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Deskripsi Penyakit</span>
                    </label>
                    <textarea name="deskripsi" id="deskripsi" class="textarea" placeholder="Type here">{!! $penyakit->deskripsi !!}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Solusi Penyakit</span>
                    </label>
                    <textarea name="solusi" id="solusi" class="textarea" placeholder="Type here">{!! $penyakit->solusi !!}</textarea>
                    @error('solusi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Gambar Penyakit</span>
                    </label>
                    <input type="file" class="file-input w-full max-w-xs" id="gambar" name="gambar" />
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}" alt="{{ $penyakit->nama }}"
                        class="max-w-sm rounded-lg shadow-2xl w-full" />
                </div>
                <div class="mt-5 text-right space-x-3">
                    <a href={{ route('admin.penyakit.index') }} class="btn btn-primary px-6">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary px-6">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>

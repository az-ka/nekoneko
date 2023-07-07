<x-layout-admin>
    <div class="card w-full p-6 bg-base-100 shadow-xl">
        <div class="text-xl font-semibold inline-block">
            Create Gejala
        </div>
        <div class="divider mt-2"></div>
        <div class="h-full w-full pb-6 bg-base-100">
            <form action="{{ route('admin.gejala.store') }}" method="post" class="overflow-x-auto w-full">
                @csrf
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Kode Gejala</span>
                    </label>
                    <input type="text" @error('id') is-invalid @enderror" id="id" name="id"
                        value="{{ $generateId }}" placeholder="Type here" class="input input-bordered w-full "
                        readonly>
                    @error('id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Nama Gejala</span>
                    </label>
                    <input type="text" value="{{ old('nama') }}" placeholder="Type here"
                        class="input input-bordered w-full " @error('nama') is-invalid @enderror" id="nama"
                        name="nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-5 text-right space-x-3">
                    <a href={{ route('admin.gejala.index') }} class="btn btn-primary px-6">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary px-6">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>

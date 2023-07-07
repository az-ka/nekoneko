<x-layout-admin>
    <div class="card w-full p-6 bg-base-100 shadow-xl">
        <div class="text-xl font-semibold inline-block">
            Edit Basis Pengetahuan
        </div>
        <div class="divider mt-2"></div>
        <div class="h-full w-full pb-6 bg-base-100">
            <form action="{{ route('admin.bp.update', $bp->id) }}" method="post" class="overflow-x-auto w-full">
                @method('PUT')
                @csrf
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Nama Gejala</span>
                    </label>
                    <select name="gejala_id" id="gejala_id" class="select w-full">
                        <option disabled selected>Pilih Gejala</option>
                        @foreach ($gejala as $key => $value)
                            <option value="{{ $value->id }}" {{ $bp->gejala_id == $value->id ? 'selected' : null }}>
                                {{ $value->nama }}</option>
                        @endforeach
                    </select>
                    @error('gejala_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Nama Penyakit</span>
                    </label>
                    <select name="penyakit_id" id="penyakit_id" class="select w-full">
                        <option disabled selected>Pilih Penyakit</option>
                        @foreach ($penyakit as $key => $value)
                            <option value="{{ $value->id }}"
                                {{ $bp->penyakit_id == $value->id ? 'selected' : null }}>
                                {{ $value->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('penyakit_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text text-base-content undefined">Faktor Kepastian (CF)</span>
                    </label>
                    <select name="cf" id="cf" class="select w-full">
                        <option value="1" {{ $bp->cf == 1 ? 'selected' : null }}>
                            Sangat berpengaruh (1.0)
                        </option>
                        <option value="0.9" {{ $bp->cf == 0.9 ? 'selected' : null }}>
                            Sangat berpengaruh (0.9)
                        </option>
                        <option value="0.8" {{ $bp->cf == 0.8 ? 'selected' : null }}>
                            Berpengaruh (0.8)
                        </option>
                        <option value="0.7" {{ $bp->cf == 0.7 ? 'selected' : null }}>
                            Berpengaruh (0.7)
                        </option>
                        <option value="0.6" {{ $bp->cf == 0.6 ? 'selected' : null }}>
                            Cukup berpengaruh (0.6)
                        </option>
                        <option value="0.5" {{ $bp->cf == 0.5 ? 'selected' : null }}>
                            Cukup berpengaruh (0.5)
                        </option>
                        <option value="0.4" {{ $bp->cf == 0.4 ? 'selected' : null }}>
                            Kurang berpengaruh (0.4)
                        </option>
                        <option value="0.3" {{ $bp->cf == 0.3 ? 'selected' : null }}>
                            Kurang berpengaruh (0.3)
                        </option>
                        <option value="0.2" {{ $bp->cf == 0.2 ? 'selected' : null }}>
                            Tidak tahu (0.2)
                        </option>
                        <option value="0.1" {{ $bp->cf == 0.1 ? 'selected' : null }}>
                            Tidak tahu (0.1)
                        </option>
                    </select>
                    @error('cf')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-5 text-right space-x-3">
                    <a href={{ route('admin.bp.index') }} class="btn btn-primary px-6">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary px-6">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout-admin>

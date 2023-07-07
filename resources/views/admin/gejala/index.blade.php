<x-layout-admin>
    <div class="card w-full p-6 bg-base-100 shadow-xl">
        <div class="text-xl font-semibold inline-block">
            Gejala
            <div class="inline-block float-right">
                <div class="inline-block float-right">
                    <a href={{ route('admin.gejala.create') }} class="btn px-6 btn-sm normal-case btn-primary">
                        Create
                    </a>
                </div>
            </div>
        </div>
        <div class="divider mt-2"></div>
        <div class="h-full w-full pb-6 bg-base-100">
            <div class="overflow-x-auto">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Gejala</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejala as $key => $value)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nama }}</td>
                                <td>
                                    <div class="text-right">
                                        <a class="btn btn-square btn-ghost"
                                            href="{{ route('admin.gejala.edit', $value->id) }}">
                                            <x-icon-edit />
                                        </a>
                                        <form action="{{ route('admin.gejala.destroy', $value->id) }}"
                                            id="delete_{{ $value->id }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                            <button class="btn btn-square btn-ghost" value="{{ $value->id }}">
                                                <x-icon-trash />
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout-admin>

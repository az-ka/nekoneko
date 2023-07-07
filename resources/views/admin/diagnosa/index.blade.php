<x-layout-admin>
    <div class="card w-full p-6 bg-base-100 shadow-xl">
        <div class="text-xl font-semibold inline-block">
            Riwayat Diagnosa
        </div>
        <div class="divider mt-2"></div>
        <div class="h-full w-full pb-6 bg-base-100">
            <div class="overflow-x-auto">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Pemilik</th>
                            <th>Nama Peliharaan</th>
                            <th>Nama Penyakit</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diagnosa as $key => $value)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ date_format($value->created_at, 'd-m-Y') }}</td>
                                <td>{{ $value->nama_pemilik }}</td>
                                <td>{{ $value->nama_pemilik }}</td>
                                <td>{{ $value->nama_peliharaan }}</td>
                                <td>{{ $value->penyakit->nama }}</td>
                                <td>{{ $value->presentase * 100 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout-admin>

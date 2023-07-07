<x-layout-pengguna>
    <section class="bg-white pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mb-12 max-w-[620px] lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Diagnosa
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]">
                            Data Pemilik Dan Peliharaan
                        </h2>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".1s">
                        <h4 class="mb-3 text-xl font-bold text-dark">
                            Pemilik
                        </h4>
                        <table border="0" class="table">
                            <tr>
                                <td class="py-2">Nama Pemilik</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">{{ Str::title(Session('biodata')['nama_pemilik']) }}</td>
                            </tr>
                            <tr>
                                <td class="py-2">No. HP</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">{{ Session('biodata')['no_hp'] }}</td>
                            </tr>
                            <tr>
                                <td class="py-2">Alamat</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">{{ Str::title(Session('biodata')['alamat']) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".15s">

                        <h4 class="mb-3 text-xl font-bold text-dark">
                            Peliharaan
                        </h4>
                        <table border="0" class="table">
                            <tr>
                                <td class="py-2">Nama Kucing</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">{{ Str::title(Session('biodata')['nama_peliharaan']) }} -
                                    {{ Str::title(Session('biodata')['jekel']) }}</td>
                            </tr>
                            <tr>
                                <td class="py-2">Umur Kucing(Bulan)</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">
                                    {{ Session('biodata')['umur'] != 0 ? Session('biodata')['umur'] . ' Bulan' : 'Tidak diketahui' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2">Berat</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">
                                    {{ Session('biodata')['berat'] != 0 ? Session('biodata')['berat'] . ' Kg' : 'Tidak diketahui' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2">Suhu</td>
                                <td class="px-4 py-2">:</td>
                                <td class=" py-2">
                                    {!! Session('biodata')['suhu'] != 0 ? Session('biodata')['suhu'] . '<sup>o</sup>C' : 'Tidak diketahui' !!}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <form action="{{ route('pengguna.diagnosa.analisa') }}" method="post" class="container">
            @csrf
            <div class="wow fadeInUp bg-white p-10 mb-5" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s;">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">
                                        No</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">
                                        Gejala yang dialami</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">
                                        Kondisi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($gejala as $key => $value)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text font-medium text-gray-800 dark:text-gray-200">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text text-gray-800 dark:text-gray-200">
                                            {{ Str::title($value->nama) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text text-gray-800 dark:text-gray-200">
                                            <select name="kondisi[]" id="kondisi"
                                                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                                <option disabled selected>
                                                    Pilih Kondisi
                                                </option>
                                                <option value="{{ $value->id }}_1">Pasti</option>
                                                <option value="{{ $value->id }}_2">Hampir pasti</option>
                                                <option value="{{ $value->id }}_3">Mungkin</option>
                                                <option value="{{ $value->id }}_4">Ragu-ragu</option>
                                                <option value="{{ $value->id }}_0">Tidak</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('pengguna.diagnosa.reset') }}"
                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-dark">
                    Kembali
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center rounded bg-primary py-4 px-6 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-dark">
                    Analisa
                </button>
            </div>
        </form>
    </section>
</x-layout-pengguna>

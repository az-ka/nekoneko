<x-layout-pengguna>
    <script src="https://cdn.tailwindcss.com"></script>

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

    <section id="about" class="bg-[#f3f4fe] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container">
            <div class="wow fadeInUp bg-white" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="items-center justify-between overflow-hidden border lg:flex">
                            <div
                                class="w-full py-12 px-7 sm:px-12 md:p-16 lg:max-w-[565px] lg:py-9 lg:px-16 xl:max-w-[640px] xl:p-[70px]">
                                <h2
                                    class="mb-6 text-3xl font-bold text-dark sm:text-4xl sm:leading-snug 2xl:text-[40px]">
                                    Selamat! Kucing Anda Dinyatakan Sehat Walafiat
                                </h2>
                                <p class="mb-9 text-base leading-relaxed text-body-color">
                                    Kucing Anda telah menjalani diagnosa penyakit kucing menggunakan sistem pakar kami
                                    dan hasilnya menunjukkan bahwa kucing Anda dalam kondisi sehat walafiat. Dalam
                                    proses diagnosa tersebut, sistem kami telah mengidentifikasi gejala-gejala yang
                                    mungkin dialami oleh kucing Anda dan menentukan kemungkinan penyakit berdasarkan
                                    gejala yang ditemukan. <br><br>

                                    Setelah melakukan diagnosa, kami menyimpulkan bahwa kucing Anda tidak menderita
                                    penyakit apa pun. Namun, kami tetap menyarankan agar Anda tetap memperhatikan
                                    kesehatan kucing Anda dan memberikan perawatan yang baik untuk mencegah masalah
                                    kesehatan di masa depan. <br><br>

                                    Jangan ragu untuk menghubungi dokter hewan terdekat jika Anda memiliki pertanyaan
                                    atau memerlukan bantuan dalam merawat kucing Anda. Terima kasih telah menggunakan
                                    sistem pakar diagnosa penyakit kucing kami. <br><br>

                                    Salam,<br>
                                    Tim Sistem Pakar Diagnosa Penyakit Kucing | NekoCare

                                </p>
                            </div>
                            <div class="text-center">
                                <div class="relative z-10 inline-block">
                                    <img src="https://media.discordapp.net/attachments/1125528451428917389/1126237018687541358/257f2e9c-1b6c-11ee-93fb-0242ac110004_1.png"
                                        alt="image" class="mx-auto lg:ml-auto rounded-l-xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout-pengguna>

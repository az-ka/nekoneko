<x-layout-admin>
    <div class="py-12 flex">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="stats shadow">

                <div class="stat">
                    <div class="stat-figure text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-medical-cross"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M13 3a1 1 0 0 1 1 1v4.535l3.928 -2.267a1 1 0 0 1 1.366 .366l1 1.732a1 1 0 0 1 -.366 1.366l-3.927 2.268l3.927 2.269a1 1 0 0 1 .366 1.366l-1 1.732a1 1 0 0 1 -1.366 .366l-3.928 -2.269v4.536a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-4.536l-3.928 2.268a1 1 0 0 1 -1.366 -.366l-1 -1.732a1 1 0 0 1 .366 -1.366l3.927 -2.268l-3.927 -2.268a1 1 0 0 1 -.366 -1.366l1 -1.732a1 1 0 0 1 1.366 -.366l3.928 2.267v-4.535a1 1 0 0 1 1 -1h2z">
                            </path>
                        </svg>
                    </div>
                    <div class="stat-title">Total Gejala</div>
                    <div class="stat-value text-white">{{ $gejala }}</div>
                    {{-- <div class="stat-desc">21% more than last month</div> --}}
                </div>

                <div class="stat">
                    <div class="stat-figure text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-virus-search"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M17 12a5 5 0 1 0 -5 5"></path>
                            <path d="M12 7v-4"></path>
                            <path d="M11 3h2"></path>
                            <path d="M15.536 8.464l2.828 -2.828"></path>
                            <path d="M17.657 4.929l1.414 1.414"></path>
                            <path d="M17 12h4"></path>
                            <path d="M21 11v2"></path>
                            <path d="M12 17v4"></path>
                            <path d="M13 21h-2"></path>
                            <path d="M8.465 15.536l-2.829 2.828"></path>
                            <path d="M6.343 19.071l-1.413 -1.414"></path>
                            <path d="M7 12h-4"></path>
                            <path d="M3 13v-2"></path>
                            <path d="M8.464 8.464l-2.828 -2.828"></path>
                            <path d="M4.929 6.343l1.414 -1.413"></path>
                            <path d="M17.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                            <path d="M19.5 19.5l2.5 2.5"></path>
                        </svg>
                    </div>
                    <div class="stat-title">Total Penyakit</div>
                    <div class="stat-value text-white">{{ $penyakit }}</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-heart"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                            </path>
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                            </path>
                            <path
                                d="M11.993 16.75l2.747 -2.815a1.9 1.9 0 0 0 0 -2.632a1.775 1.775 0 0 0 -2.56 0l-.183 .188l-.183 -.189a1.775 1.775 0 0 0 -2.56 0a1.899 1.899 0 0 0 0 2.632l2.738 2.825z">
                            </path>
                        </svg>
                    </div>
                    <div class="stat-title">Total Diagnosa Bulan Ini</div>
                    <div class="stat-value text-white">{{ $diagnosa }}</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-medical"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                            </path>
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                            </path>
                            <path d="M10 14l4 0"></path>
                            <path d="M12 12l0 4"></path>
                        </svg>
                    </div>
                    <div class="stat-title">Total Semua Diagnosa</div>
                    <div class="stat-value text-white">{{ $diagnosaAll }}</div>
                </div>


            </div>
        </div>
    </div>
</x-layout-admin>

<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <script src="https://cdn.tailwindcss.com"></script>

    <section class="py-52">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="wow fadeInUp relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-14 px-8 text-center sm:px-12 md:px-[60px]"
                        data-wow-delay=".15s" style="visibility: visible; animation-delay: 0.15s;">
                        <div class="mb-10 text-center">
                            <a href="/" class="mx-auto inline-block max-w-[180px]">
                                <img src={{ asset('assets/images/logo/logo-coba.svg') }} alt="logo"
                                    class="header-logo w-full" />
                            </a>
                            <br>
                            <span class="text-base font-semibold text-dark">Silahkan Masukkan Email Dan Password</span>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-6">
                                <input id="email" type="email" name="email" :value="old('email')" required
                                    autofocus autocomplete="username" placeholder="Email"
                                    class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <input id="password" type="password" name="password" required
                                    autocomplete="current-password" type="password" placeholder="Password"
                                    class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                            </div>
                            <div class="mb-10">
                                <button type="submit"
                                    class="bordder-primary w-full cursor-pointer rounded-md border bg-blue-600 py-3 px-5 text-base text-white transition duration-300 ease-in-out hover:shadow-md">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

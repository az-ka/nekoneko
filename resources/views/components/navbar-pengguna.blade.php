<div class="absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
    <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="/" class="navbar-logo block w-full py-5">
                    <img src={{ asset('assets/images/logo/logo-white-coba.svg') }} alt="logo"
                        class="header-logo w-full" />
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                    </button>
                    <nav id="navbarCollapse"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
                        <ul class="blcok lg:flex">
                            <li class="group relative">
                                <a class="flex mx-8 py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                                    href={{ route('pengguna.dashboard') }}>Home</a>
                            </li>
                            <li class="group relative">
                                <a class="flex mx-8 py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                                    href={{ route('pengguna.biodata.index') }}>Diagnosa</a>
                            </li>
                            <li class="group relative">
                                <a class="flex mx-8 py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                                    href={{ route('pengguna.penyakit.index') }}>Info Penyakit</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="hidden justify-end pr-16 sm:flex lg:pr-0">

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">
                                Login
                            </a>
                        @endauth
                    @endif
                    {{-- <a href="signup.html"
                        class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                        Sign Up
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

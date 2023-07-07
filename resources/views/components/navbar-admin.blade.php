<div class=" bg-base-100">
    <div class="navbar container mx-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href={{ route('dashboard') }}>Dashboard</a></li>
                    <li><a href={{ route('admin.gejala.index') }}>Gejala</a></li>
                    <li><a href={{ route('admin.penyakit.index') }}>Penyakit</a></li>
                    <li><a href={{ route('admin.bp.index') }}>Basis Pengetahuan</a></li>
                    <li><a href={{ route('admin.diagnosa.index') }}>Diagnosa</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl">nekoCARE</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href={{ route('dashboard') }}>Dashboard</a></li>
                <li><a href={{ route('admin.gejala.index') }}>Gejala</a></li>
                <li><a href={{ route('admin.penyakit.index') }}>Penyakit</a></li>
                <li><a href={{ route('admin.bp.index') }}>Basis Pengetahuan</a></li>
                <li><a href={{ route('admin.diagnosa.index') }}>Diagnosa</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="dropdown dropdown-bottom">
                    <label tabindex="0" class="btn m-1">{{ Auth::user()->name }}</label>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        {{-- <li>
                            <a href={{ route('profile.edit') }}>Profile</a>
                        </li> --}}
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href={{ route('logout') }}
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Log Out</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

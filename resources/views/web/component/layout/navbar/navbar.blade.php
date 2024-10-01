<section class="bg-white text-gray text-sm font-medium leading-loose rounded-none">
    <div class="container flext flex-col justify-center items-start px-16 py-2.5 w-full max-md:px-5 max-md:max-w-full">
        <div class="flex gap-8">
            <img src="{{ asset('assets/logo.png') }}" alt="" srcset="">
            <div class="flex gap-6 items-center list-none">
                <li class="nav-item ">
                    <a class="nav-link hover:underline {{ request()->routeIs('beranda') ? 'active' : ''}}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown d-flex align-items-center">
                    <!-- Tautan ke halaman lain -->
                    <a class="nav-link text-decoration : none {{ request()->routeIs('profil_kelurahan') ? 'active' : ''}}" href="{{ route('profil_kelurahan') }}" >Profil Kelurahan</a>
                
                    <!-- Tombol dropdown -->
                    <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <!-- Daftar dropdown -->
                    <ul class="dropdown-menu text-left md:text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('galeri') }}">Galeri</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="#">Visi Misi</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="#">Geografis dan Penduduk</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="#">Struktur Pemerintahan</a></li>
                        <li><a class="dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200" href="{{ route('profil_kelurahan') }}">Lainnya</a></li>
                    </ul>
                </li>                
            <div class="flex gap-6 items-center list-none">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hover:underline" id="navbarDarkDropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Berita</a>
                    <ul class="dropdown-menu text-left md:text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> Bidang Kamtibmas </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> Bidang Kesehatan </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> Bidang Pariwisata </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> Bidang Pendidikan </a></li>
                    </ul>
                </li>
            </div>
            <div class="flex gap-6 itmes-center list-none">           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hover:underline" id="navbarDarkDropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kelembagaan</a>
                    <ul class="dropdown-menu text-left md:text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> LPMK </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> UMKM </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> BKM </a></li>
                        <li><a class="nav-link dropdown-item py-2 text-sm text-gray-700 dark:text-gray-200"> PKK </a></li>
                    </ul>
                </li>
            </div>
                <li class="nav-item ">
                    <a class="nav-link hover:underline ">Layanan</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link hover:underline ">Daftar Informasi</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link hover:underline ">Kontak Kami</a>
                </li>
            </div>
    </div>
</section>


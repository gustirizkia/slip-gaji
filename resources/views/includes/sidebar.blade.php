<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('img/logopojok.jpeg')}}" alt="Logo" srcset="" class="img-fluid"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item  {{ (request()->is('admin')) ? 'active' : '' }}">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/karyawan*')) ? 'active' : '' }}">
                    <a href="{{ route('karyawann.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-bounding-box"></i>
                        <span>Abses Karyawan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/barang*')) ? 'active' : '' }}">
                    <a href="{{ route('barang.index') }}" class='sidebar-link'>
                        <i class="bi bi-box-seam"></i>
                        <span>Manajemen Barang</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('admin/penggajian*')) ? 'active' : '' }}">
                    <a href="{{ route('penggajian.create') }}" class='sidebar-link'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path
                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path
                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>
                        <span>Penggajian Karyawan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('admin/omset*')) ? 'active' : '' }}">
                    <a href="{{ route('omset.index') }}" class='sidebar-link'>
                        <i class="bi bi-wallet2"></i>
                        <span>Omset</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class='sidebar-link btn btn-link btn-block'>
                            <i class="bi bi-box-arrow-left"></i>
                            <span>Keluar</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

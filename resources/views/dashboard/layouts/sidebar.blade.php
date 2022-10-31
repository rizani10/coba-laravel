
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center p-3 mb-1 text-muted">
                    <span>Akademik</span>
                </h6>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/ruangkelas*') ? 'active' : '' }}" href="/dashboard/ruangkelas">
                        <span data-feather="columns"></span>
                        Data Kelas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/siswa*') ? 'active' : '' }}" href="/dashboard/siswa">
                        <span data-feather="smile"></span>
                        Data Siswa
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/guru*') ? 'active' : '' }}" href="/dashboard/guru">
                        <span data-feather="users"></span>
                        Data Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/mapel*') ? 'active' : '' }}" href="/dashboard/mapel">
                        <span data-feather="book"></span>
                        Data Mapel
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/newstudent*') ? 'active' : '' }}" href="/dashboard/newstudent">
                        <span data-feather="user-plus"></span>
                        Siswa Baru
                    </a>
                </li>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center p-3 mb-1 text-muted">
                    <span>Berita</span>
                </h6>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                        <span data-feather="file-text"></span>
                        My Post
                    </a>
                </li>
            </ul>

            {{-- cek jika yang login ini admin tampilkan jika tidak jangan dengan gate --}}
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center p-3 mt-3 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                            <span data-feather="grid"></span> Posts Categories
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                            <span data-feather="users"></span> Data Users
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/allpost*') ? 'active' : '' }}" href="/dashboard/allpost">
                            <span data-feather="rss"></span> Data Semua Berita
                        </a>
                    </li>
                </ul>
            @endcan
        </div>
    </nav>
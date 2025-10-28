        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB-Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" 
            href="{{ route('dashboard.index') }}">
                    <i class="fas fa-tachometer-alt fa-fw text me-2"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Data Fakultas Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFakultas"
                    aria-expanded="true" aria-controls="collapseFakultas">
                    <i class="fas fa-university"></i>
                    <span>Data Fakultas</span>
                </a>
                <div id="collapseFakultas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('datafakultas.index') }}">Data Fakultas</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Data Prodi Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProdi"
                    aria-expanded="true" aria-controls="collapseProdi">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Data Prodi</span>
                </a>
                <div id="collapseProdi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('dataprodi.index') }}">Prodi</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Data Dosen Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDosen"
                    aria-expanded="true" aria-controls="collapseDosen">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Data Dosen</span>
                </a>
                <div id="collapseDosen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('datadosen.index') }}">Data Dosen</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Data Mahasiswa Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMahasiswa"
                    aria-expanded="true" aria-controls="collapseMahasiswa">
                    <i class="fas fa-users"></i>
                    <span>Data Mahasiswa</span>
                </a>
                <div id="collapseMahasiswa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('datamahasiswa.index') }}">Data Mahasiswa</a>
                    </div>
                </div>
            </li>
        </ul>

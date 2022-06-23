        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIASMI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('admin-dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/admin-dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item {{ Request::is('admin-section*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-align-left"></i>
                    <span>Section</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/admin-section">Section List</a>
                        <h6 class="collapse-header">Detail:</h6>
                        <a class="collapse-item" href="admin-section/tentang">Tentang</a>
                        <a class="collapse-item" href="admin-section/visi">Visi</a>
                        <a class="collapse-item" href="admin-section/misi">Misi</a>
                        <a class="collapse-item" href="admin-section/jurusan">Jurusan</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Contact:</h6>
                        <a class="collapse-item" href="admin-section/alamat">Alamat</a>
                        <a class="collapse-item" href="admin-section/telepon">Telepon</a>
                        <a class="collapse-item" href="admin-section/email">Email</a>
                        <a class="collapse-item" href="admin-section/whatsapp">Whatsapp</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ Request::is('admin-news') ? 'active' : '' }}">
                <a class="nav-link" href="/admin-news">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>News</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin-gallery') ? 'active' : '' }}">
                <a class="nav-link" href="/admin-gallery">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Gallery</span></a>
            </li>
            <li class="nav-item {{ Request::is('admin-ukm') ? 'active' : '' }}">
                <a class="nav-link" href="/admin-ukm">
                    <i class="fas fa-fw fa-user"></i>
                    <span>UKM</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Account
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <form action="logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link bg-transparent border-0">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-5">
				<i class="fa fa-bars"></i>
			</button>

			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">
				<div class="topbar-divider d-none d-sm-block"></div>

				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
						<img class="img-profile rounded-circle" src="http://localhost:8080/siasmi/assets/SBAdmin/img/undraw_profile.svg">
					</a>
				</li>
			</ul>

		</nav>
		<!-- End of Topbar -->

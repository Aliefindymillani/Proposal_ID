<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'admin/home' ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard <sup>admnistrator</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'admin/home' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/tambah-user' ?>">
            <i class="fas fa-cog"></i>
            <span>Tambah User</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/list-user' ?>">
            <i class="fas fa-cog"></i>
            <span>List User</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/kegiatan-masuk' ?>">
            <i class="fas fa-cog"></i>
            <span>Kegiatan Masuk</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/kegiatan-diterima' ?>">
            <i class="fas fa-cog"></i>
            <span>Kegiatan Diterima</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/kegiatan-ditolak' ?>">
            <i class="fas fa-cog"></i>
            <span>Kegiatan Ditolak</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Aksi
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/signup' ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Sign Up</span></a>
    </li>
</ul>
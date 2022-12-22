<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard <sup>User</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/home') ?>">
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
        <a class="nav-link" href="<?= base_url('/home'); ?>/tambah">
            <i class="fas fa-cog"></i>
            <span>Tambah Pengajuan</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/home'); ?>/status">
            <i class="fas fa-cog"></i>
            <span>Status Pengajuan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/home'); ?>/jadwal">
            <i class="fas fa-cog"></i>
            <span>Jadwal Kegiatan</span>
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
        <a class="nav-link" href="<?= base_url('/admin/signup') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Sign Up</span></a>
    </li>
</ul>
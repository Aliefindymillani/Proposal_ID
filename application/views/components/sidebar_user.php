<ul class="navbar-nav sidebar sidebar-light accordion side-bar" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <img class="img" style="width: 50px; height: 50px" src="<?= base_url('assets') ?>/img/logoadmin.png" alt="Logo Sispro">
        </div>
        <div class="sidebar-brand-text mx-3">Sispro <br> <sup>User</sup></div>
    </a>

    <!-- Divider -->
    <br class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/home') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <br class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/form-proposal'); ?>">
            <i class="fas fa-cog"></i>
            <span>Tambah Pengajuan</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/status-proposal'); ?>">
            <i class="fas fa-cog"></i>
            <span>Status Pengajuan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/jadwal-kegiatan'); ?>">
            <i class="fas fa-cog"></i>
            <span>Jadwal Kegiatan</span>
        </a>
    </li>

    <!-- Divider -->
    <br class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Aksi
    </div>

    <!-- Log Out -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
            <i class="fas fa-fw fa-arrow-right"></i>
            <span>Log Out</span>
        </a>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda akan log out?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger" href="<?php echo base_url().'logout' ?>">Yes</a>
                </div>
                </div>
            </div>
        </div>
    </li>
</ul>
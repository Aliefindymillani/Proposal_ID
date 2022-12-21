<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">

            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="btn btn-danger">Logout</button>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header text-center bg-danger">
                    Yakin ingin keluar?
                </h6>

                <a class="dropdown-item text-center small text-danger" href="<?php echo base_url().'logout' ?>">Keluar</a>
            </div>
        </li>
    </ul>

</nav>
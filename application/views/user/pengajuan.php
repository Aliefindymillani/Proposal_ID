<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pengajuan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6">
            <div class="card">
                <div class="card-header bg-info">

                </div>
                <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2">
                                <form class="user">
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label">Nama
                                                Kegiatan</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" id="staticEmail"
                                                    placeholder="Nama Kegiatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Tanggal Pengajuan</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" id="staticEmail"
                                                    placeholder="Tanggal Pengajuan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label">Ketua
                                                Pelaksana</label>
                                            <div class="col-10">
                                                <input type="email" class="form-control"
                                                    id="staticEmail" placeholder="Ketua Pelaksana">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Deskripsi</label>
                                            <div class="col-10">
                                                <textarea class="form-control"
                                                    id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="deskripsi"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label">Upload
                                                Berkas</label>
                                            <div class="col-10">
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1"
                                                    placeholder="Upload Berkas">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Tanggal Mulai
                                                Kegiatan</label>
                                            <div class="col-10">
                                                <input type="email" class="form-control"
                                                    id="staticEmail" placeholder="dd-mm-yyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Tanggal Selesai
                                                Kegiatan</label>
                                            <div class="col-10">
                                                <input type="email" class="form-control"
                                                    id="staticEmail" placeholder="dd-mm-yyy">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <a href="<?= base_url('index.php/Dashboard') ?>"
                                            class="btn btn-info col-4">
                                            Tambah Pengajuan
                                        </a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
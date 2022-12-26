<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pengajuan</h1>
        <?php if($this->session->flashdata('success')): ?>
          <div class="alert-success">
               <?php echo $this->session->flashdata('success'); ?>
          </div>
     <?php endif; ?>
     <?php if($this->session->flashdata('error')): ?>
          <div class="alert-danger">
               <?php echo $this->session->flashdata('error'); ?>
          </div>
     <?php endif; ?>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php if (isset($error)) : ?>
			<div class="invalid-feedback"><?= $error ?></div>
		<?php endif; ?>

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
                            <form class="admin" method="POST" action="<?= base_url('home/proses-proposal') ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label">Nama
                                                Kegiatan</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="nama_kegiatan" id="staticEmail"
                                                    placeholder="Nama Kegiatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Tanggal Pengajuan</label>
                                            <div class="col-10">
                                                <input type="date" class="form-control" name="tgl_pengajuan" id="staticEmail" placeholder="Tanggal Pengajuan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label">Ketua
                                                Pelaksana</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="ketua_pelaksana" id="staticEmail" placeholder="Ketua Pelaksana">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Deskripsi</label>
                                            <div class="col-10">
                                                <textarea class="form-control"
                                                    id="exampleFormControlTextarea1" rows="3" name="deskripsi" placeholder="Deskripsi Kegiatan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label">Upload
                                                Berkas</label>
                                            <div class="col-10">
                                                <input type="file" class="form-control-file" name="berkas" id="exampleFormControlFile1" placeholder="Upload Berkas">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="staticEmail"
                                                class="col-2 col-form-label">Tanggal Mulai
                                                Kegiatan</label>
                                            <div class="col-10">
                                                <input type="date" class="form-control" name="tgl_mulai"
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
                                                <input type="date" class="form-control" name="tgl_selesai"
                                                    id="staticEmail" placeholder="dd-mm-yyy">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" value="submit" >Submit</button>
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
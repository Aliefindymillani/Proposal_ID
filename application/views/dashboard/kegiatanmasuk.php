<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kegiatan Masuk</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                    
                </div>

                <div class="card-body">
                    <!-- (A) SEARCH FORM -->
                    <div class="col justify-content-end d-flex mb-2">
                        <form class="form-inline" role="form" action="<?php echo base_url().'admin/kegiatan-masuk';?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Search...">
                            </div>
                            <button type="submit" class="btn btn-info" name="submit" >Search</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama Kegiatan</th>
                                    <th class="text-center">Ketua Pelaksana</th>
                                    <th class="text-center">Pengajuan</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center" colspan="2">Mulai - Selesai</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center" colspan="3">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                $no = 1;
                                foreach ($data_proposal as $row) : 
                                
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td><?= $row->nama_kegiatan ?></td>
                                        <td><?= $row->ketua_pelaksana ?></td>
                                        <td><?= $row->tgl_pengajuan ?></td>
                                        <td><?= $row->deskripsi ?></td>
                                        <td><?= $row->tgl_mulai ?></td>
                                        <td><?= $row->tgl_selesai ?></td>
                                        <td><?= $row->status ?></td>
                                        <td><a  onClick="return confirm('Lihat Proposal?')" href="<?= base_url(); ?>./assets/uploads/<?= $row->berkas_file; ?>" type="button" class="btn btn-info" target="_blank">Lihat</a></td>
                                        <td><a  onClick="return confirm('Tolak Proposal?')" href="<?= base_url('admin/tolak-status/'.$row->id_proposal); ?>" type="button" class="btn btn-danger">Tolak</a></td>
                                        <td><a  onClick="return confirm('Terima Proposal?')" href="<?= base_url('admin/terima-status/'.$row->id_proposal); ?>" type="button" class="btn btn-success">Terima</a></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
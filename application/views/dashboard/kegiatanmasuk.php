<div class="col-xl-12 col-md-6">
    <div class="card">
        <div class="card-header bg-info">
            
        </div>

        <div class="card-body">
            <!-- (A) SEARCH FORM -->
            <div class="col justify-content-end d-flex mb-2">
                <form class="form-inline" role="form" action="<?php echo base_url().'admin/kegiatan-masuk';?>" method="post">
                    <div class="form-group" style="padding-right:10px;">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-info" name="submit" >Search</button>
                </form>
            </div>
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama Kegiatan</th>
                                        <th class="text-center">Ketua Pelaksana</th>
                                        <th class="text-center">Pengajuan</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Mulai</th>
                                        <th class="text-center">Selesai</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center option" aria-controls="none" colspan="3">Opsi</th>
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
</div>
<div class="col-xl-12 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="col justify-content-end d-flex mb-2">
                <form class="form-inline" role="form" action="<?php echo base_url().'admin/kegiatan-ditolak';?>" method="post">
                    <div class="form-group" style="padding-right:10px;">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-search" name="submit" >Search</button>
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
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = $this->uri->segment('3') + 1;
                                    // $no = 1;
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
                                            <td><a  onClick="return confirm('Lihat Proposal?')" href="<?= base_url(); ?>./assets/uploads/<?= $row->berkas_file; ?>" type="button" class="btn btn-netral" target="_blank">Lihat</a></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <br/>
                            <div class="justify-content-center">
                                <?php 
                                    echo $this->pagination->create_links();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
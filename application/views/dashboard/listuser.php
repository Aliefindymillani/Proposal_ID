<div class="col-xl-12 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="col justify-content-end d-flex mb-2">
                <form class="form-inline" role="form" action="<?php echo base_url().'admin/list-user';?>" method="post">
                    <div class="form-group" style="padding-right:10px;">
                        <input type="text" class="form-control" name="searchUser" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-search" name="submit" >Search</button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Akses User</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = $this->uri->segment('3') + 1;
                        // $no = 1;
                        foreach ($data_user as $row) : 
                        
                        ?>
                            <tr>
                                <td class="text-center">
                                    <?= $no++; ?>
                                </td>
                                <td class="text-center"><?= $row->name ?></td>
                                <td class="text-center"><?= $row->username ?></td>
                                <td class="text-center"><?= $row->email ?></td>
                                <td class="text-center"><?= $row->akses ?></td>
                                <td class="text-center"><a class="d-none d-sm-inline-block btn btn-sm btn-netral shadow-sm" href="<?php echo base_url().'admin/update/'.$row->username; ?>" type="button">Update</a></td>
                                <td class="text-center"><a class="d-none d-sm-inline-block btn btn-sm btn-fail shadow-sm" href="<?php echo base_url().'admin/delete/'.$row->username; ?>" type="button">Delete</a></td>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <br/>
                <div class="pagination justify-content-center">
                    <?php 
                    echo $this->pagination->create_links();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
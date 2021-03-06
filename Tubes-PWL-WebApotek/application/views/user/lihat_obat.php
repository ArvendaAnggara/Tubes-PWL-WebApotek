<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('user/form_obat'); ?>"><button class="btn btn-success mb-3">
                    <i class="fas fa-plus"> Tambah Obat</i></button></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Penyimpanan</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Pemasok</th>
                            <th>Kedaluwarsa</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1; 
                        foreach ($obat as $data) : 
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data->nama_obat; ?></td>
                            <td><?= $data->penyimpanan; ?></td>
                            <td><?= $data->kategori; ?></td>
                            <td><?= $data->stok; ?></td>
                            <td><?= $data->nama_pemasok; ?></td>
                            <td><?= $data->kedaluwarsa; ?></td>
                            <td><?= $data->h_jual; ?></td>
                            <td>
                                <a href="<?= base_url('user/edit_obat/')?><?= $data->id?>"><button type="button"
                                        class="sbtn btn-success"><i class="fas fa-edit"></i></button></a>

                                <a href="<?= base_url('user/hapus_obat/')?><?= $data->id?>"><button type="delete"
                                        class="sbtn btn-danger"><i class="fas fa-trash"></i></button></a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
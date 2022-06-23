<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <!-- <div class="box-header"> -->
            <div class="col-lg-12">
                <?php if(validation_errors()){?>
                    <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                    </div>
                <?php }?>
                <?= $this->session->flashdata('pesan'); ?>
                <a href="<?= base_url('laporan/laporan_print_anggota'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> </a>
                <a href="<?= base_url('laporan/laporan_anggota_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> </a>
                <a href="<?= base_url('laporan/export_excel_anggota'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> </a>
                <!-- <table class="table table-bordered table-striped" id="table1"> -->
                <table class="table table-hover">    
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col" nowrap>Member Sejak</th>
                            <!-- <th scope="col">Image</th> -->
                            <th scope="col">Role Id</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $a = 1;
                    foreach ($anggota as $u) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $u['nama']; ?></td>
                        <td><?= $u['alamat']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td><?= date('d F Y', $u['tanggal_input']); ?></td>
                        <!-- <td>
                            <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                        </td> -->
                        <td><?= $u['role_id']; ?></td> 
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- </div> -->
        
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

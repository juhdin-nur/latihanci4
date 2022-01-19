<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?php echo base_url('/komik/create'); ?>" class="btn btn-success mt-4">Tambah Data</a>
            <h4 class="mt-2">Daftar Film</h4>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        <?php echo session()->getFlashdata('pesan'); ?>
                    </div><?php endif; ?>
                </div>
                <!-- table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($komik as $k) : ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><img src="<?php echo base_url('/img') . "/" . $k['sampul']; ?>" alt="" class="sampul"></td>
                                <td><?php echo $k['title'] ?></td>
                                <td>
                                    <a href="<?php echo base_url('komik/') . "/" . $k['slug'] ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <!-- endtable -->
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
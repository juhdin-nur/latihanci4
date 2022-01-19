<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mt-2">Data Orang</h4>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- <a href="<?php echo base_url('/komik/create'); ?>" class="btn btn-success mt-4">Tambah Data</a> -->

            <!-- <?php if (session()->getFlashdata('pesan')) : ?> -->
            <!-- <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        <?php echo session()->getFlashdata('pesan'); ?>
                    </div><?php endif; ?> -->
        </div>
        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 + (10 * ($currentPage - 1));
                foreach ($orang as $org) : ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $org['nama']; ?></td>
                        <td><?php echo $org['alamat'] ?></td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php echo $pager->links('orang', 'orang_pagination'); ?>
        <!-- endtable -->
    </div>
</div>
</div>
<?php echo $this->endSection(); ?>
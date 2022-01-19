<?php echo $this->extend('layout/template');
echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3 mt-5" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('/img') . "/" . $komik['sampul'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $komik['title']; ?></h5>
                            <p class="card-text"><?php echo $komik['penulis'] ?></p>


                            <p class="card-text"><small class="text-muted"><?php echo $komik['penerbit']; ?></small></p>
                            <a href="<?php echo base_url('/komik/edit') . "/" . $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo base_url() . "/komik/" . $komik['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <br><br><br>
                            <a href="<?php echo base_url('/komik'); ?>">Kembali ke Daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
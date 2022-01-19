<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="my-3">Form Ubah Data Komik</h4>
            <form action="<?php echo base_url('/komik/update') . "/" . $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="slug" name="slug" value="<?php echo $komik['slug'] ?>">
                <input type="hidden" name="sampulLama" value="<?php echo $komik['sampul'] ?>">
                <div class="form-group row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control <?php echo ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['title']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">penulis</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control " id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-2">
                        <img src="<?php echo base_url('img') . "/" . $komik['sampul']; ?>" alt="preview" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-4">
                        <input type="file" class="custom-file-input <?php echo ($validation->hasError('sampul')) ? 'is-invalid' : '' ?>" value="<?= (old('sampul')) ? old('sampul') : $komik['sampul']; ?>" name="sampul" id="sampul" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sampul'); ?>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>


<?php echo $this->endSection(); ?>
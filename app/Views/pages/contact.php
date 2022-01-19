<?php echo $this->extend('layout/template'); ?>
<?php echo $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Kontak</h1>
            <?php
            foreach ($alamat as $a) :
            ?>
                <ul>
                    <li><?= $a['tipe'] ?></li>
                    <li><?= $a['alamat'] ?></li>
                    <li><?= $a['kota'] ?></li>
                </ul>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
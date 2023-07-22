<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tittle">
    <div class="head">
        <h1>Data Mahasiswa</h1>
    </div>
    </div>
    <div class="table">
    <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
            <?php
            if (empty($mahasiswa)) { ?>
                <tr>
                    <td collspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['nim']; ?></td>
                        <td><?= $a['prodi']; ?></td>
                        <td><?= $a['universitas']; ?></td>
                        <td><?= $a['nomor_handphone']; ?></td>
                        <td class="action">
                            <a href="crud/edit/<?=$a['nim']; ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="crud/hapus/<?= $a['nim']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus NIM : <?= $a['nim'] ?>')">Delete</button></a>
                            
                        </td>
                    </tr>
            <?php    }
            } ?>
        </table>

        <a href="Crud/tambah" class="btn btn-success" role="button">+ Tambah Data</a>
    </div>
</main>

<?= $this->endSection(); ?>
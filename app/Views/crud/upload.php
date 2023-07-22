<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="tambah">
    <div class="tittle">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    </div>
    <div class="form">
        <form action="tambah" method="post">
            <div class="form-group">
                <label>Nim :</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" required />
            </div>
            <div class="form-group">
                <label>Nama Lengkap :</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" required />
            </div>
            <div class="form-group">
                <label>Prodi :</label>
                <input type="text" name="prodi" class="form-control" placeholder="Masukan Prodi" required />
            </div>
            <div class="form-group">
                <label>Universitas :</label>
                <input type="text" name="universitas" class="form-control" placeholder="Masukan Universitas" required />
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="nomor_handphone" class="form-control" placeholder="08xxxxxxxxx" required />
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection(); ?>
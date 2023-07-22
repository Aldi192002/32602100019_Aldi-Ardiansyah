<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="edit">
        <div class="tittle">
        <h1>Edit Data Mahasiswa</h1>
        </div>
    </div>
    <div class="form">
        <form action="/crud/editan" method="POST">
            <div class="form-group">
                <label>Nim :</label>
                <input type="text" name="nim" class="form-control" value=" Tidak dapat diubah !." required/>
            </div>
                <!--<div class="form-group">
                <input type="text" name="newNim" id="nim" class="form-control" placeholder="Masukkan Nim Baru" required/>
            </div>-->
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="newNama" class="form-control" value="<?= $edit['nama']; ?>" required/>
            </div>
            <div class="form-group">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Baru" required/>
            </div>
            <div class="form-group">
                <label>Prodi :</label>
                <input type="text" name="prodi" class="form-control" value="<?= $edit['prodi']; ?>" required/>
            </div>
            <div class="form-group">
                <input type="text" name="newProdi" id="prodi" class="form-control" placeholder="Masukkan Prodi Baru" required/>
            </div>
            <div class="form-group">
                <label>Universitas :</label>
                <input type="text" name="universitas" class="form-control" value="<?= $edit['universitas']; ?>" required/>
            </div>
            <div class="form-group">
                <input type="text" name="newUniversitas" id="universitas" class="form-control" placeholder="Masukkan Universitas Baru" required/>
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="nomor_handphone" class="form-control" value="<?= $edit['nomor_handphone']; ?>" required/>
            </div>
            <div class="form-group">
                <input type="text" name="newNomor_handphone" id="nomor_handphone" class="form-control" placeholder="Masukkan Nim Baru" required/>
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection(); ?>
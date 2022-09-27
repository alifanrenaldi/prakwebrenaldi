<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="p-4">
    <div class="container">
        <div class="col-md-5">
            <form action="/update/<?= $mahasiswa['id'] ?>" method="post">
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
                </div>

                <div class=" form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10" value="<?= $mahasiswa['deskripsi'] ?>"></textarea>
                </div>

                <button type=" submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
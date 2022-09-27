<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
    <div class='p-3'>
      <a class="btn btn-primary mb-3" href="/create" role="button">Tambah</a>
      <table class="table table-primary table-striped table-border">
        <thead class="table-warning">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">created_at</th>
            <th scope=""></th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php $no = 1;
          foreach ($mahasiswa as $mhs) : ?>
            <tr>
              <th scope="row"><?= $no ?></th>
              <td><?= $mhs['npm'] ?></td>
              <td><?= $mhs['nama'] ?></td>
              <td><?= $mhs['alamat'] ?></td>
              <td><?= $mhs['deskripsi'] ?></td>
              <td><?= $mhs['created_at'] ?></td>
              <td>
                <div class="d-flex">
                  <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id'] ?>">Edit</a>
                  <form action="/delete/<?= $mhs['id'] ?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>

                </div>
   
  </td>
  </tr>
<?php $no++;
          endforeach; ?>
</tbody>
</table>
<?= $this->endSection() ?>
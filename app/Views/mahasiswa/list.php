<div class='p-4'>
<a class="btn btn-primary mb-3" href="/create" role="button">Tambah</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; 
     foreach($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $mhs['npm'] ?></td>
      <td><?= $mhs['nama'] ?></td>
      <td><?= $mhs['alamat'] ?></td>
      <td><?= $mhs['created_at'] ?></td>
    </tr>
    <?php $no++; endforeach;?>
  </tbody>
</table>
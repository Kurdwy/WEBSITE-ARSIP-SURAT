<a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nomor Surat</th>
      <th scope="col">Tanggal Terima Surat</th>
      <th scope="col">Tanggal Surat</th>
      <th scope="col">Asal Surat</th>
      <th scope="col">Isi Surat</th>
      <th scope="col">Keterangan Surat</th>
      <th scope="col">Created_At</th>
      <th scope="col">Updated_At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $no = 1;

    foreach ($suratmasuk as $srtmsk) :

    ?>

      <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $srtmsk['no_surat'] ?></td>
        <td><?= $srtmsk['tgl_terima_surat'] ?></td>
        <td><?= $srtmsk['tgl_surat'] ?></td>
        <td><?= $srtmsk['asal_surat'] ?></td>
        <td><?= $srtmsk['isi_surat'] ?></td>
        <td><?= $srtmsk['keterangan_surat'] ?></td>
        <td><?= $srtmsk['created_at'] ?></td>
        <td><?= $srtmsk['updated_at'] ?></td>
        <td>
          <div class="d-flex">
            <a class="btn btn-warning mr-3" href="/edit/<?= $srtmsk['id'] ?>">Edit</a>
            <form action="/delete/<?= $srtmsk['id'] ?>" method="post">
              <input name="_method" value="DELETE" type="hidden">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </td>
      </tr>

    <?php

      $no++;
    endforeach

    ?>

  </tbody>
</table>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Surat Keluar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

              <a href="/suratmasuk/create" type="button" class="btn btn-primary mb-3">Tambah</a>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Tanggal Terima Surat</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">ID Instansi Asal Surat</th>
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
                      <td><?= $srtmsk['id_instansi'] ?></td>
                      <td><?= $srtmsk['isi_surat'] ?></td>
                      <td><?= $srtmsk['keterangan_surat'] ?></td>
                      <td><?= $srtmsk['created_at'] ?></td>
                      <td><?= $srtmsk['updated_at'] ?></td>
                      <td>
                        <div class="d-flex">
                          <a class="btn btn-warning mr-3" href="/suratmasuk/edit/<?= $srtmsk['id_surat_masuk'] ?>">Edit</a>
                          <form action="/suratmasuk/delete/<?= $srtmsk['id_surat_masuk'] ?>" method="post">
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

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
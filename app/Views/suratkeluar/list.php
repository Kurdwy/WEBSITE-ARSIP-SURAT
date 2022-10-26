<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
                            <table class="table table-bordered table-hover justify-text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nomor Surat</th>
                                        <th scope="col">Isi Surat</th>
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
                                            <td><?= $srtmsk['isi_surat'] ?></td>
                                        </tr>

                                    <?php

                                        $no++;
                                    endforeach

                                    ?>

                                </tbody>
                            </table>
                        </div>
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
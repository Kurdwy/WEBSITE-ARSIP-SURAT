<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card">
      <div class="container-fluid">
        <form action="/suratkeluar/update/<?= $id_surat_keluar ?>" method="post" class="row g-3 ml-10 container justify-content-center">
          <div class="form-group col-md-6">
            <label for="no_surat">Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $no_surat ?> " autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="id_instansi">ID Instansi Asal Surat</label>
            <input type="text" name="id_instansi" class="form-control" id="id_instansi" value="<?= $id_instansi ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tujuan_surat">Tujuan Surat</label>
            <textarea class="form-control" name="tujuan_surat" aria-label="With textarea" id="tujuan_surat" value="<?= $tujuan_surat ?>" autocomplete="off"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="pengirim_surat">Pengirim Surat</label>
            <textarea class="form-control" name="pengirim_surat" aria-label="With textarea" id="pengirim_surat" value="<?= $pengirim_surat ?>" autocomplete="off"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_kirim_surat">Tanggal Kirim Surat</label>
            <input type="Date" name="tgl_kirim_surat" class="form-control" id="tgl_kirim_surat" value="<?= $tgl_kirim_surat ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_surat">Tanggal Surat</label>
            <input type="Date" name="tgl_surat" class="form-control" id="tgl_surat" value="<?= $tgl_surat ?>" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>
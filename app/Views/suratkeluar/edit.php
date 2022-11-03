<form action="/suratkeluar/update/<?= $id_surat_keluar ?>" method="post" class="row g-3 ml-10 container border border-dark justify-content-center">
  <div class="form-group col-md-6">
    <label for="no_surat">Nomor Surat</label>
    <input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $no_surat ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="id_instansi">ID Instansi Asal Surat</label>
    <input type="text" name="id_instansi" class="form-control" id="id_instansi" value="<?= $id_instansi ?>">
  </div>
    <label for="isi_surat">Isi Surat</label>
    <textarea class="form-control" name="isi_surat" aria-label="With textarea" id="isi_surat" value="<?= $isi_surat ?>"></textarea>
  </div>
  <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
</form>
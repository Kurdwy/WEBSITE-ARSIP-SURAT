<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card">
      <div class="container-fluid">
        <form action="/suratmasuk/store" method="post" class="row g-3 ml-10 container justify-content-center">
          <div class="form-group col-md-6">
            <label for="no_surat">Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat">
          </div>
          <div class="form-group col-md-6">
            <label for="id_instansi">ID Instansi Asal Surat</label>
            <!-- <?php foreach ($instansi as $inst) : ?> 
    <select class="form-control" name="id_instansi" id="id_instansi">
      <option selected>---Pilih ID Instansi---</option>
      <option><?= $inst['id_instansi'] ?></option>
    </select>
    <?php
                  endforeach
    ?> -->
            <input type="text" name="id_instansi" class="form-control" id="id_instansi">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_terima_surat">Tanggal Terima Surat</label>
            <input type="Date" name="tgl_terima_surat" class="form-control" id="tgl_terima_surat">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_surat">Tanggal Surat</label>
            <input type="Date" name="tgl_surat" class="form-control" id="tgl_surat">
          </div>
          <!-- <div class="form-group col-md-6">
    <label for="asal_surat">Asal Surat</label>
    <input type="text" name="asal_surat" class="form-control" id="asal_surat">
  </div> -->
          <div class="form-group col-md-6">
            <label for="isi_surat">Isi Surat</label>
            <textarea class="form-control" name="isi_surat" aria-label="With textarea" id="isi_surat"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="keterangan_surat">Keterangan Surat</label>
            <textarea class="form-control" name="keterangan_surat" aria-label="With textarea" id="keterangan_surat"></textarea>
          </div>
          <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>
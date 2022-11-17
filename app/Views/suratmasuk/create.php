<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h2><b>Mohon Input Dengan Benar</b></h2>
    <div class="card">
      <!-- <div class="card-header">
        <h3>Masukan Data Dengan Benar!</h3>
      </div> -->
      <div class="container-fluid mt-1">
        <form action="/suratmasuk/store" method="post" class="row g-3 ml-10 container justify-content-center">
          <div class="form-group col-md-6">
            <label for="no_surat">Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat" autocomplete="off">
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
            <input type="text" name="id_instansi" class="form-control" id="id_instansi" autocomplete="off">
          </div>
          <div class="form-group col-md-12">
            <label for="asal_surat">Asal Surat</label>
            <textarea class="form-control" name="asal_surat" aria-label="With textarea" id="asal_surat" autocomplete="off"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_terima_surat">Tanggal Terima Surat</label>
            <input type="Date" name="tgl_terima_surat" class="form-control" id="tgl_terima_surat" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_surat">Tanggal Surat</label>
            <input type="Date" name="tgl_surat" class="form-control" id="tgl_surat" autocomplete="off">
          </div>
          <!-- <div class="form-group col-md-6">
    <label for="asal_surat">Asal Surat</label>
    <input type="text" name="asal_surat" class="form-control" id="asal_surat">
  </div> -->

          <!-- <div class="form-group col-md-12">
            <label for="formFile">Softcopy Surat</label>
            <input class="form-control" type="file" id="formFile">
          </div> -->
          <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>
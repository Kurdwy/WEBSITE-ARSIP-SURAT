<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card">
      <div class="container-fluid">
        <form action="/suratmasuk/update/<?= $id_surat_masuk ?>" method="post" class="row g-3 ml-10 container justify-content-center">
          <div class="form-group col-md-6">
            <label for="no_surat">Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $no_surat ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="id_instansi">ID Instansi Asal Surat</label>
            <input type="text" name="id_instansi" class="form-control" id="id_instansi" value="<?= $id_instansi ?>" autocomplete="off">
          </div>
          <div class="form-group col-md-12">
            <label for="asal_surat">Asal Surat</label>
            <textarea class="form-control" name="asal_surat" aria-label="With textarea" id="asal_surat" value="<?= $asal_surat ?>" autocomplete="off"></textarea>
          </div>
          <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>
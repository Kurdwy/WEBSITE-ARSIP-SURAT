<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h2><b>Mohon Input Dengan Benar</b></h2>
    <div class="card">
      <div class="container-fluid">
        <form action="/suratkeluar/store" method="post" class="row g-3 ml-10 container justify-content-center">
          <div class="form-group col-md-6">
            <label for="no_surat">Nomor Surat</label>
            <input type="text" name="no_surat" class="form-control" id="no_surat" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="id_instansi">ID Instansi Asal Surat</label>
            <input type="text" name="id_instansi" class="form-control" id="id_instansi" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tujuan_surat">Tujuan Surat</label>
            <input type="text" name="tujuan_surat" class="form-control" id="tujuan_surat" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="pengirim_surat">Pengirim Surat</label>
            <textarea class="form-control" name="pengirim_surat" aria-label="With textarea" id="pengirim_surat" autocomplete="off"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_kirim_surat">Tanggal Kirim Surat</label>
            <input type="Date" name="tgl_kirim_surat" class="form-control" id="tgl_kirim_surat" autocomplete="off">
          </div>
          <div class="form-group col-md-6">
            <label for="tgl_surat">Tanggal Surat</label>
            <input type="Date" name="tgl_surat" class="form-control" id="tgl_surat" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary col-md-4 mb-3">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>
<div class="py-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <h3 class="display-3">Tambah Mahasiswa</h3> -->
      </div>
    </div>
  </div>
</div>
<?php if ($this->session->flashdata('error_message')){ ?>
<div class="py-1">
  <div class="container">
    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Oh snap!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
      <p><?= $this->session->flashdata('error_message') ?></p>
    </div>
  </div>
</div>
<?php } ?>
<div class="py-1">
  <div class="container">
    <div class="alert alert-primary" role="alert">
      <p><b>Informasi!</b> Field yang ditandai harus diisi dengan benar.</p>
    </div>
  </div>
</div>
<div class="py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <form id="c_form-h" method="post" action="<?= base_url('Hutang/create'); ?>" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="tanggal_hutang" class="col-4 col-form-label">Tanggal*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="tanggal_hutang"> 
          </div>
        </div>
        <div class="form-group row">
          <label for="keterangan" class="col-4 col-form-label">Keterangan*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="keterangan"> 
          </div>
        </div>
        <div class="form-group row">
          <label for="nominal" class="col-4 col-form-label">Nominal*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="nominal"> 
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Baru</button>
      </div>
      </form>
    </div>
  </div>
</div>
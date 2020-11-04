<div class="py-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <h3 class="display-3">Ubah Data Backend User</h3> -->
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
    <form id="c_form-h" method="post" action="<?= base_url('Hutang/update'); ?>" enctype="multipart/form-data">
      <div class="form-group row"> 
        <label for="id" class="col-2 col-form-label">ID*</label>
        <div class="col-3">
          <input type="text" class="form-control" name="id_hutang" value="<?= $htg->id_hutang ?>" readonly> 
        </div>
      </div>
      <div class="form-group row">
        <label for="tanggal_hutang" class="col-2 col-form-label">Tanggal Hutang*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="tanggal_hutang" value="<?= $htg->tanggal_hutang ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="keterangan" class="col-2 col-form-label">Keterangan*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="keterangan" value="<?= $htg->keterangan ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="nominal" class="col-2 col-form-label">Nominal*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="nominal" value="<?= $htg->nominal ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
  </div>
</div>
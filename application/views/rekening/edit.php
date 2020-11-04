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
    <form id="c_form-h" method="post" action="<?= base_url('Rekening/update'); ?>" enctype="multipart/form-data">
      <div class="form-group row"> 
        <label for="id" class="col-2 col-form-label">ID*</label>
        <div class="col-3">
          <input type="text" class="form-control" name="id_rekening" value="<?= $rkn->id_rekening ?>" readonly> 
        </div>
      </div>
      <div class="form-group row">
        <label for="bank" class="col-2 col-form-label">Bank*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="bank" value="<?= $rkn->bank ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="no_rekening" class="col-2 col-form-label">Nomor Rekening*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="no_rekening" value="<?= $rkn->no_rekening ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="nama_pemilik" class="col-2 col-form-label">Nama Pemilik*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="nama_pemilik" value="<?= $rkn->nama_pemilik ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="saldo" class="col-2 col-form-label">Saldo*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="saldo" value="<?= $rkn->saldo ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
  </div>
</div>
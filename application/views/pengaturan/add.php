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
        <form id="c_form-h" method="post" action="<?=site_url('Pengaturan/create')?>" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="tanggal_transaksi" class="col-4 col-form-label">Tanggal*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="tanggal_transaksi" required> 
          </div>
        </div>
        <div class="form-group row">
          <label for="keterangan" class="col-4 col-form-label">Keterangan*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="keterangan" required> 
          </div>
        </div>
        <div class="form-group row">
          <label for="pemasukan" class="col-4 col-form-label">Pemasukan*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="pemasukan" required> 
          </div>
        </div>
        <div class="form-group row">
          <label for="pengeluaran" class="col-4 col-form-label">Pengeluaran*</label>
          <div class="col-9">
            <input type="text" class="form-control" name="pengeluaran" required> 
          </div>
        </div>
        <button type="submit" name="<?$page?>" class="btn btn-primary">Tambah Baru</button>
      </div>
      </form>
    </div>
  </div>
</div>
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
    <form id="c_form-h" method="post" action="<?= base_url('Transaksi/update'); ?>" enctype="multipart/form-data">
      <div class="form-group row"> 
        <label for="id" class="col-2 col-form-label">ID*</label>
        <div class="col-3">
         <input type="text" class="form-control" name="id_transaksi" value="<?= $trs->id_transaksi ?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="tanggal_transaksi" class="col-2 col-form-label">Tanggal*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="tanggal_transaksi" value="<?= $trs->tanggal_transaksi ?>">
        </div>
      </div>
      <div class="form-group row"> 
        <label for="id" class="col-2 col-form-label">Kategori*</label>
        <div class="col-3">
         <input type="text" class="form-control" name="kode_kategori" value="<?= $trs->kode_kategori ?>" readonly>
        </div>
      </div>
      <div class="form-group row"> 
        <label for="id" class="col-2 col-form-label">Rekening*</label>
        <div class="col-3">
         <input type="text" class="form-control" name="id_rekening" value="<?= $trs->id_rekening?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="keterangan" class="col-2 col-form-label">Keterangan*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="keterangan" value="<?= $trs->keterangan ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="pemasukan" class="col-2 col-form-label">Pemasukan*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="pemasukan" value="<?= $trs->pemasukan ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="pengeluaran" class="col-2 col-form-label">Pengeluaran*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="pengeluaran" value="<?= $trs->pengeluaran ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
  </div>
</div>
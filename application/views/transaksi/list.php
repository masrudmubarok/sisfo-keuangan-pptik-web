<div class="py-1">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-12"><h3 class="display-3">Mahasiswa</h3></div> -->
    </div>
  </div>
</div>
<div class="py-0">
  <?php if ($this->session->flashdata('success_message')){ ?>
  <div class="container">
    <div class="alert alert-success" role="alert">
      <h5 class="alert-heading">Sukses!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h5>
      <p><?= $this->session->flashdata('success_message') ?></p>
    </div>
  </div>
  <?php }
  if ($this->session->flashdata('error_message')){ ?>
  <div class="container">
    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Oh snap!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
      <p><?= $this->session->flashdata('error_message') ?></p>
    </div>
  </div>
  <?php } ?>
</div>
<div class="py-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-2"><a class="btn btn-success" href="<?php echo base_url('Transaksi/add_trs'); ?>"><i class="fa fa-plus"></i>&ensp;Tambah Transaksi</a></div>
    </div>
  </div>
</div>
<div class="py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped table-borderless" id="newstable">
            <thead>
              <tr>
                <th class="text-center" style="width: 20px">NO</th>
                <th class="text-center">TANGGAL</th>
                <th class="text-center">KATEGORI</th>
                <th class="text-center">REKENING</th>
                <th class="text-center" style="width: 250px">KETERANGAN</th>
                <th class="text-center">PEMASUKAN</th>
                <th class="text-center">PENGELUARAN</th>
                <th class="text-center" style="width: 80px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i = 1; 
              $no =1;
              foreach ($trs_list as $trs){ ?>
                <tr>
                  <td class="text-center" style="width: 20px"><?php echo $no++ ?></td>
                  <td class="text-center"><?php echo $trs->tanggal_transaksi; ?></td>
                  <td class="text-left"><?php echo $trs->nama_kategori; ?></td>
                  <td class="text-left"><?php echo $trs->nama_pemilik; ?></td>
                  <td class="text-left" style="width: 250px"><?php echo $trs->keterangan; ?></td>
                  <td class="text-center">Rp <?php echo number_format($trs->pemasukan,0,',','.'); ?></td>
                  <td class="text-center">Rp <?php echo number_format($trs->pengeluaran,0,',','.'); ?></td>
                  <td class="text-center" style="width: 80px">
                    <a href="<?= base_url('Transaksi/edit_trs/' . $trs->id_transaksi) ?>"><i class="fa fa-pencil text-secondary"></i></a>
                    <a href="#" data-toggle="modal" data-target="#ModalDelete" data-id="<?php echo $trs->id_transaksi; ?>"
                        data-title="<?php echo $trs->id_transaksi; ?>"><i class="fa fa-trash text-danger"></i></a>
                  </td>
                </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ModalDelete" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Penghapusan</h5> <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin menghapus data transaksi yang dipilih?</p>
        <p id="mhstitle"></p>
      </div>
      <div class="modal-footer"> 
        <a href="<?php echo base_url() ?>Transaksi/delete/<?php echo $trs->id_transaksi?>" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>
<script>
$('#ModalDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var trs_id = button.data('id')
    var modal = $(this)
    var trs_title = button.data('title');
    document.getElementById('ktrtitle').innerHTML = rkn_title;
    modal.find('.modal-footer a').attr("href", "<?= base_url() ?>Transaksi/delete/" + trs_id)
})
</script>
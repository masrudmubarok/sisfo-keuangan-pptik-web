<link rel="stylesheet" type="text/css" media="print" href="<?= base_url('assets/css/simple-sidebar.css') ?>">

<h2><center>Laporan Keuangan PPTIK</center></h2>
<br>
<center>
<table style="border: 1px solid black;">
    <thead class="thead-dark" style="background-color: yellow;border: 1px solid black">
        <tr>
            <th class="text-center" style="border: 1px solid black;width: 20px;">NO</th>
            <th class="text-center" style="border: 1px solid black;">TANGGAL</th>
            <th class="text-center" style="width: 750px;border: 1px solid black;">KETERANGAN</th>
            <th class="text-center" style="border: 1px solid black;">PEMASUKAN</th>
            <th class="text-center" style="border: 1px solid black;">PENGELUARAN</th>
        </tr>
    </thead>
    <!-- Join Program -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>a. Join Program</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <tbody>
      <?php 
      $i = 1; 
      $no =1;
      foreach ($lpr_jprog as $lprmjp){ ?>
            <tr>
              <td class="text-center" style="width: 20px;border: 1px solid black"><?php echo $no++ ?></td>
              <td class="text-center" style="border: 1px solid black"><?php echo $lprmjp->tanggal_transaksi; ?></td>
              <td class="text-left" style="width: 750px;border: 1px solid black"><?php echo $lprmjp->keterangan; ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmjp->pemasukan,0,',','.'); ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmjp->pengeluaran,0,',','.'); ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    <!-- In House Training -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>b. In House Training</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <tbody>
      <?php 
      $i = 1; 
      foreach ($lpr_ihouse as $lprmih){ ?>
            <tr>
              <td class="text-center" style="width: 20px;border: 1px solid black"><?php echo $no++ ?></td>
              <td class="text-center" style="border: 1px solid black"><?php echo $lprmih->tanggal_transaksi; ?></td>
              <td class="text-left" style="width: 750px;border: 1px solid black"><?php echo $lprmih->keterangan; ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmih->pemasukan,0,',','.'); ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmih->pengeluaran,0,',','.'); ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    <!-- Short Course -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>c. Short Course</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <tbody>
      <?php 
      $i = 1;
      foreach ($lpr_scourse as $lprmsc){ ?>
            <tr>
              <td class="text-center" style="width: 20px;border: 1px solid black"><?php echo $no++ ?></td>
              <td class="text-center" style="border: 1px solid black"><?php echo $lprmsc->tanggal_transaksi; ?></td>
              <td class="text-left" style="width: 750px;border: 1px solid black"><?php echo $lprmsc->keterangan; ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmsc->pemasukan,0,',','.'); ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmsc->pengeluaran,0,',','.'); ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    <!-- TOEIC Test -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>d. TOEIC Test</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <tbody>
      <?php 
      $i = 1; 
      foreach ($lpr_toeic as $lprmtoeic){ ?>
            <tr>
              <td class="text-center" style="width: 20px;border: 1px solid black"><?php echo $no++ ?></td>
              <td class="text-center" style="border: 1px solid black"><?php echo $lprmtoeic->tanggal_transaksi; ?></td>
              <td class="text-left" style="width: 750px;border: 1px solid black"><?php echo $lprmtoeic->keterangan; ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmtoeic->pemasukan,0,',','.'); ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmtoeic->pengeluaran,0,',','.'); ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    <!-- TOEFL Test -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>e. TOEFL Test</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <tbody>
      <?php 
      $i = 1; 
      foreach ($lpr_toefl as $lprmtoefl){ ?>
            <tr>
              <td class="text-center" style="width: 20px;border: 1px solid black"><?php echo $no++ ?></td>
              <td class="text-center" style="border: 1px solid black"><?php echo $lprmtoefl->tanggal_transaksi; ?></td>
              <td class="text-left" style="width: 750px;border: 1px solid black"><?php echo $lprmtoefl->keterangan; ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmtoefl->pemasukan,0,',','.'); ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmtoefl->pengeluaran,0,',','.'); ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    <!-- International Certification -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>f. International Certification</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <tbody>
      <?php 
      $i = 1; 
      foreach ($lpr_icert as $lprmicert){ ?>
            <tr>
              <td class="text-center" style="width: 20px;border: 1px solid black"><?php echo $no++ ?></td>
              <td class="text-center" style="border: 1px solid black"><?php echo $lprmicert->tanggal_transaksi; ?></td>
              <td class="text-left" style="width: 750px;border: 1px solid black"><?php echo $lprmicert->keterangan; ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmicert->pemasukan,0,',','.'); ?></td>
              <td class="text-center" style="border: 1px solid black">Rp <?php echo number_format($lprmicert->pengeluaran,0,',','.'); ?></td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    <!-- Lain-lain -->
    <tbody>
      <tr>
            <td class="text-center" style="width: 20px;border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="width: 750px;border: 1px solid black"><b>g. Lain-lain</b></th>
            <td class="text-center" style="border: 1px solid black"></th>
            <td class="text-center" style="border: 1px solid black"></th>
        </tr>
    </tbody>
    <thead class="thead-dark" style="background-color: yellow;border: 1px solid black">
        <tr>
            <th colspan="3" style="width: 20px;border: 1px solid black">TOTAL</th>
            <th class="text-center" style="border: 1px solid black"><left>Rp</left>&nbsp;<?php echo number_format($tot_masuk,0,',','.');?></th>
            <th class="text-center" style="border: 1px solid black"><left>Rp</left>&nbsp;<?php echo number_format($tot_keluar,0,',','.');?></th>
        </tr>
    </thead>
    <thead class="thead-dark" style="background-color: yellow;border: 1px solid black">
        <tr>
            <th colspan="3" style="width: 20px;border: 1px solid black">SALDO AKHIR</th>
            <th colspan="2" class="text-center" style="border: 1px solid black"><left>Rp</left>&nbsp;<?php echo number_format($tot_masuk-$tot_keluar,0,',','.');?></th>
        </tr>
    </thead>
</table>
</center>

<script type="text/javascript">
  	window.print().background-color();
</script>


<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
      <div class="w-100">
        <div class="card mb-4">
          <div class="card-body text-center">
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-success">Edit Pembayaran</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
<div class="container">
      <form action="<?= base_url('/home/aksi_edit_pembayaran/?')?>"method="post">
            <input type="hidden" name="id" value="<?php echo $jojo->id_pembayaran?>">

<div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Siswa<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="nama" placehoder="Enter Jabatan" name="nama" >
                <option value="<?php echo $jojo->nama?>">-PILIH-</option>
                <?php

                foreach ($a as $evan) {
                  ?>
                  <option value ="<?= $evan->id_siswa?>"><?php echo $evan->nama?>

                </option>
              <?php } ?>
            </select>
          </div>
        </div> 



<div class="mb-3 mt-3">
  <label for="bulan" class="form-label">Bulan</label>
  <input type="text" class="form-control" id="bulan" placeholder="Isi bulan" name="bulan" value="<?php echo $jojo->bulan ?>">
</div>

<div class="mb-3 mt-3">
  <label for="jumlah" class="form-label">Jumlah</label>
  <input type="text" class="form-control" id="jumlah" placeholder="Isi jumlah" name="jumlah" value="<?php echo $jojo->jumlah ?>">
</div>

<div class="mb-3 mt-3">
  <label for="tanggal" class="form-label">Tanggal Pembayaran</label>
  <input type="text" class="form-control" id="tanggal" placeholder="Isi tanggal" name="tanggal" value="<?php echo $jojo->tanggal ?>">
</div>

<div class="mb-3 mt-3">
  <label for="denda" class="form-label">Denda</label>
  <input type="text" class="form-control" id="denda" placeholder="Isi denda" name="denda" value="<?php echo $jojo->denda ?>">
</div>





<div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Status Pemeriksaan<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name ="status">
                <option value="<?php echo $jojo->status?>">Pilih</option>
                <option value="✅">Lunas</option>
                <option value="❌">Belum</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
            
      </form>
</div>

</tr>
</body>
</html> 
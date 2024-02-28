

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
                  <h6 class="m-0 font-weight-bold text-success">Tambah Petugas</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
        
        <form class="form-horizontal form-label-left" novalidate action="<?= base_url('Home/aksi_tambah_petugas/')?>" method="post" enctype="multipart/form-data">

          
         <div class="item form-group">
            <label class="control-label" for="namapetugas">Nama Petugas<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="namapetugas" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="namapetugas" placeholder="Isi Nama Petugas" required="required" type="text">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="password" placeholder="Isi Password" required="required" type="password">
            </div>
          </div>


          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">Jenis Kelamin<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name ="jk">
                <option>Pilih</option>
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

           <div class="item form-group">
            <label class="control-label" for="alamat">Alamat<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="alamat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder="Isi Alamat" required="required" type="text">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">Nomor Telepon<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nomortelp" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nomortelp" placeholder="Isi Nomor Telepon" required="required" type="text">
            </div>
          </div>


         
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
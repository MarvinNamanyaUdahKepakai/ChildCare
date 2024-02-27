

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
                  <h6 class="m-0 font-weight-bold text-success">Laporan</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">

     
      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_b') {
        echo base_url('home/cari_b');
      }
    ?>" method="post">

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal awal 
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal akhir
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-warning"><i class="fa fa-print"></i></button>
      </div>
    </div>
  </form>
</div>

  <!-- <div class="x_content"> -->
     
      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_b') {
        echo base_url('home/pdf_b');
      }
    ?>" method="post">

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal awal 
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal akhir
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-danger"><i class="fa fa-print"></i></button>
      </div>
    </div>
  </form>

  <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_b') {
        echo base_url('home/excel_barang');
      }
    ?>" method="post">

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal awal 
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
      </div>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal akhir
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-success"><i class="fa fa-print"></i></button>
      </div>
    </div>
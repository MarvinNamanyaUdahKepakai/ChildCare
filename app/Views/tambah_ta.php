

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
                  <h6 class="m-0 font-weight-bold text-success">Tambah Tahun Ajaran</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">


        <form class="form-horizontal form-label-left" novalidate action="<?= base_url('/home/aksi_tambah_ta/?')?>"method="post">
        <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
          </p> -->
          
         <!--  <span class="section">Personal Info</span> -->

            <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tahun">Tahun Ajaran<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="tahun" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tahun" placeholder="Isi Tanggal tahun" required="required" type="text">
            </div>
          </div>
               
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
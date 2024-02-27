

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
                  <h6 class="m-0 font-weight-bold text-success">Edit Tahun Ajaran</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light"> 
<div class="container">
	<form action="<?= base_url('/home/aksi_edit_ta/?')?>"method="post">
		<input type="hidden" name="id" value="<?php echo $jojo->id_ta?>">
		<div class="mb-3 mt-3">
			<label for="tahun" class="form-label">Tahun Ajaran</label>
			<input type="text" class="form-control" id="tahun" placeholder="Isi tahun" name="tahun" value="<?php echo $jojo->tahun?>">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
		
	</form>
</div>



</tr>
</body>
</html>
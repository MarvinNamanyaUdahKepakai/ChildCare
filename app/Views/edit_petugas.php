<div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">

            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">

              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">

              <li class="nav-item dropdown">

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">

                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Petugas</h3>
              </div>
              
            </div>
          </div>
          <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate action="<?= base_url('Home/aksi_edit_petugas')?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $a->id_petugas?>">   
                    <form class="form form-horizontal">
                         <div class="item form-group">
            <label class="control-label" for="namapetugas">Nama Petugas<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="namapetugas" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="namapetugas" placeholder="Isi Nama Petugas" value="<?php echo $okta->id_namapetugas?>" required="required" type="text">
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
              <input id="alamat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder="Isi Alamat" required="required" type="text" value="<?php echo $a->id_alamat?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">Nomor Telepon<span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nomortelp" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nomortelp" placeholder="Isi Nomor Telepon" required="required" type="text" value="<?php echo $a->id_nomortelp?>">
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
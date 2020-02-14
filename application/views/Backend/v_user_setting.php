<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Informasi Admin</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="<?php echo base_url().'Backend/dashboard'?>">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'Backend/dashboard'?>">Dasboard</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <p>Edit Admin</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?php echo base_url().'Backend/user_setting/update'?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label class="col-md-2 col-form-label">Foto Profil</label>
                      <div class="col-md-4 p-0">
                        <input type="file" class="form-control" name="foto" style="margin-bottom: 20px;">
                        <img src="<?php echo base_url().'/assets/images/user/'.$foto;?>"class="thumbnail">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Nama</label>
                      <div class="col-md-8 p-0">
                       <input type="text" class="form-control input-full" id="inlineinput" placeholder="Nama" name="nama" value="<?php echo $nama; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Username</label>
                      <div class="col-md-8 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Username" name="username" value="<?php echo $username; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group" align="center">
                  <div class="card-action">
                    <input type="hidden" name="id_user" value="<?php echo $id_user ?>" required>
                    <button class="btn btn-success" type="submit">Edit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
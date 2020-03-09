<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Informasi Blog</h4>
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
            <a href="<?php echo base_url().'Backend/dashboard'?>">Dashboard</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <p>Blog</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?php echo base_url().'Backend/blog_setting/update'?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label class="col-md-2 col-form-label">Image Header</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="gambar_header">
                        <small class="form-text text-muted">Image header harus beresolusi 1920 x 239 Pixels.</small>
                        <img src="<?php echo base_url().'/assets/images/header_blog/'.$gambar_header;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group" align="center">
                  <div class="card-action">
                    <input type="hidden" name="id_blog" value="<?php echo $id_blog ?>" required>
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
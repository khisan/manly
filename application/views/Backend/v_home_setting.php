<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Informasi Home</h4>
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
            <p>Home</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?php echo base_url().'Backend/home_setting/update'?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label class="col-md-3 col-form-label">Favicon</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="favicon">
                        <small class="form-text text-muted">Favicon harus beresolusi 32 x 32 Pixels.</small>
                        <img src="<?php echo base_url().'assets/images/theme/'.$favicon;?>" class="thumbnail" width="32px" height="32px">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label class="col-md-3 col-form-label">Logo Header</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="logo_header">
                        <small class="form-text text-muted">Logo harus beresolusi 248 x 54 Pixels.</small>
                        <img src="<?php echo base_url().'assets/images/theme/'.$logo_header;?>" class="thumbnail" width="248px" height="54px">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-3 col-form-label">Caption 1</label>
                      <div class="col-md-9 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Caption 1" name="caption_1" value="<?php echo $caption_1 ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-3 col-form-label">Caption 2</label>
                      <div class="col-md-9 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Caption 2" name="caption_2" value="<?php echo $caption_2 ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-3 col-form-label">Caption 3</label>
                      <div class="col-md-9 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Caption 3" name="caption_3" value="<?php echo $caption_3 ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label class="col-md-3 col-form-label">Image Slider 1</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="image_slider_1">
                        <small class="form-text text-muted">Image Slider harus beresolusi 1920 x 930 Pixels.</small>
                        <img src="<?php echo base_url().'assets/images/theme/'.$image_slider_1;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label class="col-md-3 col-form-label">Image Slider 2</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="image_slider_2">
                        <p class="help-block">Image Slider harus beresolusi 1920 x 930 Pixels.</p>
                        <img src="<?php echo base_url().'assets/images/theme/'.$image_slider_2;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group form-inline">
                      <label class="col-md-3 col-form-label">Image Slider 3</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="image_slider_3">
                        <p class="help-block">Image Slider harus beresolusi 1920 x 930 Pixels.</p>
                        <img src="<?php echo base_url().'assets/images/theme/'.$image_slider_3;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group" align="center">
                  <div class="card-action justify-content-center">
                    <input type="hidden" name="id_home" value="<?php echo $id_home?>" required>
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
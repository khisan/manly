<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Informasi About</h4>
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
            <span>About</span>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form action="<?php echo base_url().'Backend/about_setting/update'?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label class="col-md-2 col-form-label">Image Header</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="gambar_header">
                        <small class="form-text text-muted">Image header harus beresolusi 1920 x 239 Pixels.</small>
                        <img src="<?php echo base_url().'/assets/images/about/'.$gambar_header;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Judul Deskripsi 1</label>
                      <div class="col-md-8 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Judul Deskripsi" name="judul_deskripsi_1" value="<?php echo $judul_deskripsi_1 ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Isi Deskripsi 1</label>
                      <div class="col-md-8 p-0">
                        <textarea name="isi_deskripsi_1" id="summernote_1"><?php echo $isi_deskripsi_1 ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label class="col-md-2 col-form-label">Image Deskripsi 1</label>
                      <div class="col-md-9 p-0">
                        <input type="file" class="form-control" name="gambar_deskripsi_1">
                        <small class="form-text text-muted">Image Slider harus beresolusi 1200 x 1200 Pixels.</small>
                        <img src="<?php echo base_url().'/assets/images/about/'.$gambar_deskripsi_1;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Judul Deskripsi 2</label>
                      <div class="col-md-8 p-0">
                        <input type="text" class="form-control input-full" id="inlineinput" placeholder="Judul Deskripsi" name="judul_deskripsi_2" value="<?php echo $judul_deskripsi_2 ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label for="inlineinput" class="col-md-2 col-form-label">Isi Deskripsi 2</label>
                      <div class="col-md-8 p-0">
                        <textarea name="isi_deskripsi_2" id="summernote_2"><?php echo $isi_deskripsi_2 ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 col-lg-10">
                    <div class="form-group form-inline">
                      <label class="col-md-2 col-form-label">Image Deskripsi 2</label>
                      <div class="col-md-8 p-0">
                        <input type="file" class="form-control" name="gambar_deskripsi_2">
                        <small class="form-text text-muted">Image Slider harus beresolusi 1200 x 1200 Pixels.</small>
                        <img src="<?php echo base_url().'/assets/images/about/'.$gambar_deskripsi_2;?>" width="560" class="thumbnail">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group" align="center">
                  <div class="card-action">
                    <input type="hidden" name="id_about" value="<?php echo $id_about?>" required>
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
  <script src="<?php echo base_url('assets/back/js/core/jquery.3.2.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/back/summernote/dist/summernote-bs4.js')?>"></script>
  <!-- Sweet Alert -->
  <script src="<?php echo base_url('assets/front/vendor/sweetalert/sweetalert.min.js')?>"></script>

  <script>
    $(document).ready(function() {
      $('#summernote_1').summernote({
        height: 590,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link', 'picture', 'hr']],
          ['view', ["fullscreen", "codeview", "help"]],
        ],

        onImageUpload: function(files, editor, welEditable) {
          sendFile(files[0], editor, welEditable);
        }

      });
      $('#summernote_2').summernote({
        height: 590,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link', 'picture', 'hr']],
          ['view', ["fullscreen", "codeview", "help"]],
        ],

        onImageUpload: function(files, editor, welEditable) {
          sendFile(files[0], editor, welEditable);
        }

      });
    });
  </script>
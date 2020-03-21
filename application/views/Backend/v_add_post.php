<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Tambah Postingan</h4>
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
            <p>Tambah Postingan</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Form Tambah Postingan</div>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url().'Backend/post/publish'?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group">
                      <label for="email2">Judul</label>
                      <input type="text" name="judul" class="form-control judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                      <label>Konten</label>
                      <textarea name="konten" id="summernote"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" name="filefoto" class="dropify" data-height="190" required>
                    </div>
                    <div class="form-group">
                     <label for="defaultSelect">Kategori</label>
                      <select class="form-control form-control" name="kategori" id="defaultSelect">
                        <option>Pilih Kategori</option>
                        <?php foreach ($kategori->result() as $row) : ?>
                          <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="form-group">
                     <label for="defaultSelect">Tags</label>
                      <select class="form-control form-control" name="tag" id="defaultSelect">
                        <option>Pilih Tag</option>
                        <?php foreach ($tag->result() as $row) : ?>
                          <option value="<?php echo $row->id_tag;?>"><?php echo $row->nama_tag;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="card-action">
                        <button type="submit" class="btn btn-success" style="width: 100%;">
                          <span class="btn-label">
                            <i class="fas fa-paper-plane"></i>
                          </span>
                          Publish
                      </div>
                    </div>              
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
<script>
  $(document).ready(function(){
    $('#summernote').summernote({
      height: 590,
      fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Gotham-Medium'],
      fontNamesIgnoreCheck: ['Gotham-Medium'],
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ],
  
      onPaste: function (e) {
        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
        e.preventDefault();
        document.execCommand('insertText', false, bufferText);
      } 
    });

    $('.dropify').dropify({
        messages: {
            default: 'Drag atau drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });
  });
</script>

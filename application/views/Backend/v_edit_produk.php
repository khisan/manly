<?php $b= $data->row_array(); ?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Edit Produk</h4>
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
            <p>Edit Produk</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Form Edit Produk</div>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url().'Backend/produk/edit'?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-10 col-lg-8">
                    <div class="form-group">
                      <label for="email2">Nama</label>
                      <input type="text" name="nama_produk" class="form-control nama_produk" value="<?php echo $b['nama_produk']; ?>" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                      <label for="email2">Harga</label>
                      <input type="number" id="harga_produk" name="harga_produk" class="form-control" value="<?php echo $b['harga_produk'] ?>" placeholder="Harga Produk" step="any">
                    </div>
                    <div class="form-group form-inline">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi_produk" id="summernote">
                        <?php echo $b['deskripsi_produk'] ?>
                      </textarea>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Foto</label>
                        <input type="file" name="foto_produk" class="dropify" data-height="190" data-default-file="<?php echo base_url().'assets/images/produk/'.$b['foto_produk'];?>">
                    </div>
                    <div class="form-group">
                      <label for="email2">Stok</label>
                      <input type="number" name="stok_produk" class="form-control stok_produk" value="<?php echo $b['stok_produk'] ?>" placeholder="Stok Produk">
                    </div>
                    <div class="form-group">
                      <div class="card-action">
                        <input type="hidden" name="id_produk" value="<?php echo $b['id_produk'];?>" required>
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
<script src="<?php echo base_url('assets/front/js/jquery.mask.min.js')?>"></script>
<script>
  $(document).ready(function(){
    // Format mata uang.
    $( '#harga_produk' ).mask('000.000.000', {reverse: true});
    $('#summernote').summernote({
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

    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: "<?php echo site_url()?>backend/produk/upload_image",
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                editor.insertImage(welEditable, url);
            }
        });
    } 

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

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">List Postingan</h4>
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
            <p>List</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Tambah Data</h4>
                  <a class="btn btn-dark btn-round ml-auto" href="<?php echo site_url('Backend/post/add_new');?>"><i class="fa fa-plus"></i>
                    Tambah Data
                  </a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Tanggal Publish</th>
                      <th>Kategori</th>
                      <th>Tag</th>
                      <th style="width: 10%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Tanggal Publish</th>
                      <th>Kategori</th>
                      <th>Tag</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                    $no=0;
                    foreach ($data->result() as $row):
                    $no++;
                  ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row->judul_post ?></td>
                      <td><?php echo $row->tanggal_post ?></td>
                      <td><?php echo $row->nama_kategori ?></td>
                      <td><?php echo $row->nama_tag ?></td>
                      <td>
                        <div class="form-button-action">
                          <a href="<?php echo site_url('Backend/post/get_edit/'.$row->id_post);?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg btn-edit" data-original-title="Edit Task">
                            <i class="fa fa-edit"></i>
                          </a>
                          <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-delete" data-original-title="Remove" data-id="<?php echo $row->id_post; ?>">
                            <i class="fa fa-times"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--DELETE RECORD MODAL-->
  <form action="<?php echo site_url('Backend/Post/delete');?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Hapus Kategori</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-info">
              Anda yakin ingin menghapus data ini?
            </div>
          </div>
          <div class="modal-footer no-bd">
            <input type="hidden" name="id">
            <button type="submit"class="btn btn-primary">Hapus</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<script src="<?php echo base_url('assets/back/js/core/jquery.3.2.1.min.js')?>"></script>
<!-- Datatables -->
<script src="<?php echo base_url('assets/back/js/plugin/datatables/datatables.min.js')?>"></script>
<script>
  $(document).ready(function(){
    $('#add-row').dataTable();

    //Edit Record
    $('.btn-edit').on('click',function(){
        var id=$(this).data('id');
        var name=$(this).data('kategori');
        $('[name="kode"]').val(id);
        $('[name="nama_kategori2"]').val(name);
        $('#EditModal').modal('show');
    });

    //Delete Record
    $('.btn-delete').on('click',function(){
        var id=$(this).data('id');
        $('[name="id"]').val(id);
        $('#DeleteModal').modal('show');
    });

  });
  // // Add Row
  //     $('#add-row').DataTable({
  //       "pageLength": 5,
  //     });

  //     var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

  //     $('#addRowButton').click(function() {
  //       $('#add-row').dataTable().fnAddData([
  //         $("#addName").val(),
  //         $("#addPosition").val(),
  //         $("#addOffice").val(),
  //         action
  //         ]);
  //       $('#addRowModal').modal('hide');

  //     });
</script>

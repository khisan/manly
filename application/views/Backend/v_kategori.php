<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Kategori</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="<?php echo base_url() . 'Backend/dashboard' ?>">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Backend/dashboard' ?>">Dashboard</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <p>Kategori</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Tambah Data</h4>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                  <i class="fa fa-plus"></i>
                  Tambah Data
                </button>
              </div>
            </div>
            <div class="card-body">
              <!--ADD RECORD MODAL-->
              <form action="<?php echo site_url('Backend/Kategori/save'); ?>" method="post">
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header no-bd">
                        <h5 class="modal-title">
                          <span class="fw-mediumbold">
                            Kategori Baru</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                <input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer no-bd">
                        <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <!--EDIT RECORD MODAL-->
              <form action="<?php echo site_url('Backend/Kategori/edit'); ?>" method="post">
                <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header no-bd">
                        <h5 class="modal-title">
                          <span class="fw-mediumbold">
                            Edit Kategori</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                <input name="nama_kategori2" type="text" class="form-control" placeholder="Nama Kategori" required="">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer no-bd">
                        <input type="hidden" name="kode">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <!--DELETE RECORD MODAL-->
              <form action="<?php echo site_url('Backend/Kategori/delete'); ?>" method="post">
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
                        <button type="submit" class="btn btn-primary">Hapus</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kategori</th>
                      <th>Slug</th>
                      <th style="width: 10%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kategori</th>
                      <th>Slug</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($data->result() as $row) :
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->nama_kategori ?></td>
                        <td><?php echo $row->slug_kategori ?></td>
                        <td>
                          <div class="form-button-action">
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg btn-edit" data-original-title="Edit Task" data-id="<?php echo $row->id_kategori; ?>" data-kategori="<?php echo $row->nama_kategori; ?>">
                              <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-delete" data-original-title="Remove" data-id="<?php echo $row->id_kategori; ?>">
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
  <script src="<?php echo base_url('assets/back/js/core/jquery.3.2.1.min.js') ?>"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url('assets/back/js/plugin/datatables/datatables.min.js') ?>"></script>
  <script>
    $(document).ready(function() {
      $('#add-row').dataTable();

      //Edit Record
      $('.btn-edit').on('click', function() {
        var id = $(this).data('id');
        var name = $(this).data('kategori');
        $('[name="kode"]').val(id);
        $('[name="nama_kategori2"]').val(name);
        $('#EditModal').modal('show');
      });

      //Delete Record
      $('.btn-delete').on('click', function() {
        var id = $(this).data('id');
        $('[name="id"]').val(id);
        $('#DeleteModal').modal('show');
      });

    });
  </script>
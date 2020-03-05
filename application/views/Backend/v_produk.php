<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">List Produk</h4>
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
            <p>List Produk</p>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <!--DELETE RECORD MODAL-->
              <form action="<?php echo site_url('Backend/Produk/delete'); ?>" method="post">
                <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header no-bd">
                        <h5 class="modal-title">
                          <span class="fw-mediumbold">
                            Hapus Produk</span>
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
                      <th>Nama</th>
                      <th>Tanggal Publish</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Foto</th>
                      <th style="width: 10%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal Publish</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Foto</th>
                      <th style="width: 10%">Aksi</th>
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
                        <td><?php echo $row->nama_produk; ?></td>
                        <td><?php echo $row->waktu_post; ?></td>
                        <td>
                          <?php $angka = $row->harga_produk;
                          echo 'Rp. ' . number_format($angka, 0, '', '.');
                          ?>
                        </td>
                        <td><?php echo $row->stok_produk; ?></td>
                        <td><img width="150px" height="150px" src="<?php echo base_url() . 'assets/images/produk/' . $row->foto_produk; ?>" alt=""></td>
                        <td>
                          <div class="form-button-action">
                            <a href="<?php echo site_url('Backend/produk/get_edit/' . $row->id_produk); ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg btn-edit">
                              <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-delete" data-original-title="Remove" data-id="<?php echo $row->id_produk; ?>">
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

      //Delete Record
      $('.btn-delete').on('click', function() {
        var id = $(this).data('id');
        $('[name="id"]').val(id);
        $('#DeleteModal').modal('show');
      });

    });
  </script>
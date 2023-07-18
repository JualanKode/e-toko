  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kustomer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Kustomer</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kustomer</h3>
              </div>
              <div class="card-body">
                <table id="TabelKustomer" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Aksi</th>
                    <th>ID</th>
                    <th>Nama Kustomer</th>
                    <th>Telp/HP</th>
                    <th>Alamat</th>
                  </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Aksi</th>
                    <th>ID</th>
                    <th>Nama Kustomer</th>
                    <th>Telp/HP</th>
                    <th>Alamat</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Modal -->
<div class="modal fade" id="FormTambahDataKustomer" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addItemModalLabel">Tambah Data Kustomer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- CRUD form -->
                <?php echo form_open('c_kustomer/TambahDataKustomer'); ?>
                    <div class="form-group">
                        <label for="name">Nama Kustomer</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="name">Telp/HP</label>
                        <input type="text" class="form-control" id="telp" name="telp">
                        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="description">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                        <?php echo form_error('description', '<div class="text-danger">', '</div>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="FormUbahDataKustomer" tabindex="-1" role="dialog" aria-labelledby="editItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editItemModalLabel">Ubah Data Kustomer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('c_kustomer/UbahDataKustomer'); ?>
                    <input type="hidden" id="kustomer_id" name="kustomer_id">
                    <div class="form-group">
                        <label for="kustomer_name">Name</label>
                        <input type="text" class="form-control" id="kustomer_name" name="kustomer_name">
                    </div>
                    <div class="form-group">
                        <label for="kustomer_phone">Phone</label>
                        <input type="text" class="form-control" id="kustomer_phone" name="kustomer_phone">
                    </div>
                    <div class="form-group">
                        <label for="kustomer_address">Address</label>
                        <textarea class="form-control" id="kustomer_address" name="kustomer_address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

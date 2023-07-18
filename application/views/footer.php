  <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.5
      </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  </div>

    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#TabelKustomer').DataTable({
                'ajax': {
                    'url': '<?php echo base_url() ?>index.php/c_kustomer/TampilkanDataKustomer', 
                    'type': 'GET'
                },
                'dom': "<'row m-0'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
                    "<'row m-0'<'col-sm-12'tr>>" +
                    "<'row m-0'<'col-sm-5'i><'col-sm-7'p>>",
                'buttons': [{
                    'text': '<a data-toggle="modal" data-target="#FormTambahDataKustomer"><i class="fa fa-plus mr-2"></i>Tambah</a>',
                    'titleAttr': 'Tambah data baru',
                    'className': 'btn btn-light btn-sm border mr-1 mb-2'
                }],
                'columns': [
                    { 'data': null,
                      'render': function (data, type, row) {
                                var editButton = '<button class="btn btn-primary btn-sm mr-1" onclick="EditKustomer(' + row.kustomer_id + ')">Ubah</button>';
                                var deleteButton = '<button class="btn btn-danger btn-sm" onclick="HapusKustomer(' + row.kustomer_id + ')">Sampoh</button>';
                                return editButton + deleteButton;
                      }
                    },
                    { 'data': 'kustomer_id' },
                    { 'data': 'kustomer_name' },
                    { 'data': 'kustomer_phone' },
                    { 'data': 'kustomer_address' }
                ]
            });

        });

        function HapusKustomer(kustomerId) {
                $.ajax({
                    url: '<?= base_url() ?>index.php/c_kustomer/HapusDataKustomer/' + kustomerId,
                    type: 'DELETE',
                    success: function (response) {
                        $('#TabelKustomer').DataTable().ajax.reload();
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            }

        function EditKustomer(kustomerId) {
                $.ajax({
                    url: '<?= base_url() ?>index.php/c_kustomer/AmbilDataKustomer/' + kustomerId,
                    type: 'GET',
                    success: function (response) {
                        $('#kustomer_id').val(response.kustomer_id);
                        $('#kustomer_name').val(response.kustomer_name);
                        $('#kustomer_phone').val(response.kustomer_phone);
                        $('#kustomer_address').val(response.kustomer_address);

                        $('#FormUbahDataKustomer').modal('show');
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            }

    </script>
  </body>
  </html>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-2"><span>Daftar Customer</h4>
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('/ConPelanggan/t_pelanggan')?>">
                    <button class="btn icon icon-left btn-sm btn-primary mb-3">
                        Tambah Customer</button>
                </a>
                <div class="table-responsive datatable-minimal">
                    <table class="table table-striped" id="table2">
                        <thead>
                            <tr>
                                <th style="padding-left: 0.5rem;">Nama</th>
                                <th style="padding-left: 0.5rem;">Alamat</th>
                                <th style="padding-left: 0.5rem;">No HP</th>
                                <th style="padding-left: 0.5rem;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($p as $data){?>
                            <tr>
                                <td><?= $data->nm_pelanggan?></td>
                                <td><?= $data->alamat?></td>
                                <td><?= $data->nhp?></td>
                                <td>

                                    <a href="<?= base_url('/ConPelanggan/e_pelanggan/'.$data->id_pelanggan)?>">
                                        <button class="btn btn-sm btn-warning text-white me-1 mb-1 mt-1">
                                            <i class="bx bx-edit"></i>Edit
                                        </button>
                                    </a>

                                    <a href="#"
                                        onclick="openDeleteModal('<?= base_url('/ConPelanggan/soft_delete_pelanggan/'.$data->id_pelanggan)?>')">
                                        <button class="btn btn-sm btn-danger mr-1 mb-1 mt-1">
                                            <i class="bx bx-trash"></i>Hapus
                                        </button>
                                    </a>

                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Responsive Table -->
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a id="deleteLink" href="#">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
    function openDeleteModal(deleteLink) {
        document.getElementById('deleteLink').href = deleteLink;
        $('#deleteModal').modal('show');
    }
    </script>
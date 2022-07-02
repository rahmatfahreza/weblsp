<div class="container pt-5">
    <?php foreach ($data_GGBase as $row) {
        //print_r($row->id_produk);
    } ?>
    <br>
    <h3><?= $title ?></h3>       
    
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Gudang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Data</li>
                    </ol>
                </nav>

                <a class="btn btn-primary mb-2 kukukuntul" href="<?= base_url('GGBase/add'); ?>">Tambah Data</a>
            
                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="wadaw alert alert-success alert-dismissible fade show" role="alert">
                                Data produk <strong>Berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    unset($_SESSION['message']);
                endif;
                ?>

                <?php if ($this->session->flashdata('messagehps')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="wadaw alert alert-danger alert-dismissible fade show" role="alert">
                                Data produk <strong>Berhasil</strong> <?= $this->session->flashdata('messagehps'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    unset($_SESSION['messagehps']);
                endif;
                ?>

                <?php if ($this->session->flashdata('messagedit')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="wadaw alert alert-success alert-dismissible fade show" role="alert">
                                Data produk <strong>Berhasil</strong> <?= $this->session->flashdata('messagedit'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    unset($_SESSION['messagedit']);
                endif;
                ?>



                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tableGudang">
                            <thead>
                                <tr class="table-success">
                                    <th></th>
                                    <th>NAMA BARANG</th>
                                    <th>BRAND</th>
                                    <th>HARGA</th>
                                    <th>STOK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_GGBase as $row) : ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url('GGBase/update/' . $row->id_produk) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:void(0);" data="<?= $row->id_produk ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                        </td>
                                        <td><?= $row->nama_barang ?></td>
                                        <td><?= $row->brand ?></td>
                                        <td><?= $row->harga_barang ?></td>
                                        <td><?= $row->stok_barang ?></td>
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

<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus produk ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#tableGudang').DataTable();
    $('#tableGudang').on('click', '.item-delete', function() {
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>GGBase/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>
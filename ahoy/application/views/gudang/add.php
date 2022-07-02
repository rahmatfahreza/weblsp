<div class="container pt-5">
    <br>
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Gudang</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('gudang'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $attributes = array('id' => 'FrmAddProduk', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="NamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NamaBarang" name="nama_barang" value=" <?= set_value('NamaBarang'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NamaBarang') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Brand" class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Brand" name="brand">
                                <option value="RCB" selected disabled>Pilih</option>
                                <option value="RCB" <?php if (set_value('Brand') == "RCB") : echo "selected";
                                                            endif; ?>>RCB</option>
                                <option value="KTC" <?php if (set_value('Brand') == "KTC") : echo "selected";
                                                        endif; ?>>KTC</option>
                                <option value="BRT" <?php if (set_value('Brand') == "BRT") : echo "selected";
                                                    endif; ?>>BRT</option>
                                <option value="VND" <?php if (set_value('Brand') == "VND") : echo "selected";
                                                        endif; ?>>VND</option>
                                <option value="BREMBO" <?php if (set_value('Brand') == "BREMBO") : echo "selected";
                                                        endif; ?>>BREMBO</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('Brand') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Harga" name="harga_barang" value="<?= set_value('Harga'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Harga') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Stok" name="stok_barang" value="<?= set_value('Stok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Stok') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
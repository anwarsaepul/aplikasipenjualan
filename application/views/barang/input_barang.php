<div class="row">
    <div class="col-sm-8 col-md-6">
        <h1 class="text-center"><i class="fa fa-cubes"></i> Tambah Data Barang</h1>
        <form action="<?php echo base_url() ?>barang/simpanbarang" class="formBarang" method="POST">
            <div class="form-group mb-2 row">
                <label for="KodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
                <div class="col-sm-9 col-md">
                    <input type="text" class="form-control" id="kodebarang" name="kodebarang" placeholder="Input kode barang">
                </div>
            </div>
            <div class="form-group mb-2 row">
                <label for="namabarang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9 col-md">
                    <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Input nama barang">
                </div>
            </div>
            <div class="form-group mb-2 row">
                <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                <div class="col-sm-9 col-md">
                    <select name="satuan" class="form-select">
                        <option value="">Satuan</option>
                        <option value="pcs">Pcs</option>
                        <option value="unit">Unit</option>
                    </select>
                </div>
            </div>

            <div class="form-group mb-2 row">
                <div class="text-right">
                    <button type="submit" class="btn col-sm-9 col-md btn-primary" id="simpan">
                        <li class="fa fa-save"></li> Simpan
                    </button>
                </div>
            </div>
    </div>
    </form>
</div>
</div>

<script>
    // $('#simpan').click(function() {
    //     if ($("#kodebarang").val() == "" || $("#namabarang").val() == "") {
    //         alert("Data tidak boleh kosong");
    //     };
    // });

    $(function() {
        $('.formBarang').bootstrapValidator({
            fields: {
                kodebarang: {
                    message: 'Kode Barang tidak valid !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Barang harus di isi !'
                        }
                    }
                },
                namabarang: {
                    message: 'Kode Barang tidak valid !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Barang harus di isi !'
                        }
                    }
                }
            }
        });
    });
</script>
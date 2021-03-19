<h2 class="page-title">Data Barang</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-primary mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah Data
                </a>
                <table class="table table-striped text-center table-bordered">
                    <thead class="bg-dark">
                        <tr>
                            <th>NO</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>SATUAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $b) {
                        ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $b->kode_barang; ?></td>
                                <td><?php echo $b->nama_barang; ?></td>
                                <td><?php echo $b->satuan; ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <li class="fa fa-pencil"></li>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <li class="fa fa-trash-o"></li>

                                    </a>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
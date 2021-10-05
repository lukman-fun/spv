<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 10%;">Kode Barang</th>
                                <td>: <?= $brg->kode; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 10%;">NIK</th>
                                <td>: <?= $brg->nik; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 10%;">Nama Pegawai</th>
                                <td>: <?= $brg->nama_pegawai; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 10%;">Departement</th>
                                <td>: <?= $brg->departement; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 10%;">Tgl. Peminjaman</th>
                                <td>: <?= $brg->tgl_pinjam; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 10%;">Nama Barang</th>
                                <td>: <?= $brg->nama_barang; ?></td>
                            </tr>
                            <tr>
                                <th style="width: 10%;">Kategori</th>
                                <td>: <?= $brg->kategori; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="w-100 text-center">
                        <a href="<?= base_url(); ?>Barang/edit/<?= $brg->id; ?>" class="btn btn-primary btn-sm shadow">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
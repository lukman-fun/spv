<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE</th>
                                <th>NAMA</th>
                                <th>KATEGORI</th>
                                <th>STATUS</th>
                                <th>NAMA PEMINJAM</th>
                                <th>TGL. PINJAM</th>
                                <th>TGL. KEMBALI</th>
                                <th>KERUSAKAN</th>
                                <th>DEPARTEMENT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($brg as $i=>$brg): ?>
                                <tr>
                                    <td><?= $i+1; ?></td>
                                    <td><?= $brg->kode; ?></td>
                                    <td><?= $brg->nama_barang; ?></td>
                                    <td><?= $brg->kategori; ?></td>
                                    <?php if($brg->status == 'pinjam'): ?>
                                        <td><span class="badge badge-danger">Dipinjam</span></td>
                                    <?php elseif($brg->status == 'kembali'): ?>
                                        <td><span class="badge badge-success">Tersedia</span></td>
                                    <?php else: ?>
                                        <td><span class="badge badge-secondary">Perbaikan</span></td>
                                    <?php endif; ?>
                                    <!-- <td><?//$brg->status == 'perbaikan' ? '<span class="badge badge-success">Ada</span>' : '<span class="badge badge-danger">' . $brg->status . '</span>'; ?></td> -->
                                    <td><?= $brg->nama_pegawai; ?></td>
                                    <td><?= $brg->tgl_pinjam; ?></td>
                                    <td><?= $brg->tgl_kembali == '0000-00-00' ? '<i class="fa fa-minus text-danger"></i>' : $brg->tgl_kembali; ?></td>
                                    <td><?= $brg->kerusakan == '' ? '<i class="fa fa-minus text-danger"></i>' : $brg->kerusakan; ?></td>
                                    <td><?= $brg->departement; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>Barang/detail/<?= $brg->id; ?>" class="btn btn-sm btn-info shadow"><i class="fa fa-eye"></i></a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url(); ?>Barang/delete/<?= $brg->id; ?>" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i></a>
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
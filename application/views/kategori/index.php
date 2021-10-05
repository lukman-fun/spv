<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form class="d-flex" action="<?= base_url(); ?>Kategori/store" method="POST">
                    <input type="hidden" name="id" id="" class="form-control" value="<?= isset($_GET['id']) ? $ktgId->id : ''; ?>">
                    <input type="text" name="nama" id="" class="form-control" value="<?= isset($_GET['id']) ? $ktgId->nama : ''; ?>" placeholder="Masukkan Nama Kategori" required>
                    <input type="submit" value="<?= isset($_GET['id']) ? 'Update' : 'Tambah'; ?>" class="btn btn-sm <?= isset($_GET['id']) ? 'btn-info' : 'btn-primary'; ?>">
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($ktg as $i=>$ktg): ?>
                                <tr>
                                    <td><?= $i+1; ?></td>
                                    <td><?= $ktg->nama; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>Kategori?id=<?= $ktg->id; ?>" class="btn btn-sm btn-info shadow"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url(); ?>Kategori/delete/<?= $ktg->id; ?>" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i></a>
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
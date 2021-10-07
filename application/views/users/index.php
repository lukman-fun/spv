<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url(); ?>Users/add" class="btn btn-sm btn-primary shadow"><i class="fa fa-plus mr-2"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $i=>$users): ?>
                                <tr>
                                    <td><?= $i+1; ?></td>
                                    <td><?= $users->nama; ?></td>
                                    <td><?= $users->email; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>Users/edit/<?= $users->id; ?>" class="btn btn-sm btn-info shadow"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url(); ?>Users/delete/<?= $users->id; ?>" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i></a>
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
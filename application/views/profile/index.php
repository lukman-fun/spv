<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url(); ?>Users/update/<?= $this->session->id; ?>" method="POST">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?= $users->nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" name="email" id="" class="form-control" placeholder="Masukkan E-Mail" value="<?= $users->email; ?>" required>
                        </div>
                    <div class="form-group">
                        <label for="">Password (Password)</label>
                        <input type="text" name="password" id="" class="form-control" placeholder="Masukkan Passwrd">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Update" class="btn btn-info shadow">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
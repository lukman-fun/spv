<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url(); ?>Barang/up_peminjaman/<?= $this->uri->segment(3); ?>" method="POST">
                    <div class="row mx-1">
                        <div class="form-group col-12 col-md-6">
                            <label for="">NIK</label>
                            <input type="text" name="nik" id="" class="form-control" placeholder="Masukkan NIK" value="<?= $brg->nik; ?>" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" id="" class="form-control" placeholder="Masukkan Nama Pegawai" value="<?= $brg->nama_pegawai; ?>" required>
                        </div>
                    </div>
                    <div class="row mx-1">
                        <div class="form-group col-12 col-md-6">
                            <label for="">Departement</label>
                            <input type="text" name="departement" id="" class="form-control" placeholder="Masukkan Departement" value="<?= $brg->departement; ?>" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="">Tgl.Peminjaman</label>
                            <input type="date" name="tgl_pinjam" id="" class="form-control" placeholder="Masukkan Tgl.Peminjaman" value="<?= $brg->tgl_pinjam; ?>" required>
                        </div>
                    </div>
                    <div class="row mx-1">
                        <div class="form-group col-12 col-md-6">
                            <label for="">Kode Barang</label>
                            <input type="text" name="kode" id="" class="form-control" placeholder="Masukkan Kode Barang" value="<?= $brg->kode; ?>" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" id="" class="form-control" placeholder="Masukkan Nama Barang" value="<?= $brg->nama_barang; ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="">Kategori Barang</label>
                        <input type="text" name="kategori" id="" class="form-control" placeholder="Masukkan Kategori Barang" value="<?= $brg->kategori; ?>" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Simpan" class="btn btn-primary shadow">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
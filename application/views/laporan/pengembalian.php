<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url(); ?>Laporan/add_pengembalian" method="POST">
                    <div class="row mx-1">
                        <div class="form-group col-12 col-md-6">
                            <label for="">NIK</label>
                            <input type="hidden" name="id" id="id" class="form-control">
                            <select name="nik" id="nik" class="form-control">
                                <option>--Pilih Nik--</option>
                                <?php foreach($nik as $nik): ?>
                                    <option><?= $nik->nik; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="">Nama Pegawai</label>
                            <span  name="nama_pegawai" id="nama_pegawai" class="form-control text-dark">Masukkan Nama Pegawai</span>
                        </div>
                    </div>
                    <div class="row mx-1">
                        <div class="form-group col-12 col-md-6">
                            <label for="">Departement</label>
                            <span type="text" name="departement" id="departement" class="form-control">Masukkan Departement</span>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="">Tgl.Pengembalian</label>
                            <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" placeholder="Masukkan Tgl.Peminjaman" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <span type="text" name="nama_barang" id="nama_barang" class="form-control">Masukkan Barang</span>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Simpan" class="btn btn-primary shadow">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
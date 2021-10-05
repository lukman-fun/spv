<?php
class Laporan extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MLaporan', 'lpr');
    }

    public function peminjaman(){
        template('laporan/peminjaman', 'Peminjaman');
    }

    public function add_peminjaman(){
        $data = array_merge($this->input->post(), ['tgl_kembali' => '0000-00-00' ,'status' => 'pinjam']);
        $this->lpr->add($data);
        redirect(base_url().'Laporan/peminjaman');
    }

    public function pengembalian(){
        if(isset($_GET['get']) && $_GET['get'] != ''){
            echo json_encode($this->lpr->getHistoryNik(['nik' => $_GET['get']])->row());
        }else{
            $v['nik'] = $this->lpr->getNik(['status' => 'pinjam'])->result(); 
            template('laporan/pengembalian', 'Pengembalian', $v);
        }
    }

    public function add_pengembalian(){
        if($this->input->post('nik') != '--Pilih Nik--'){
            $where = [
                'id' => $this->input->post('id'),
                'nik' => $this->input->post('nik'),
                'status' => 'pinjam',
            ];

            $data = [
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'status' => 'kembali'
            ];
            $this->lpr->up_pengembalian($data, $where);
            redirect(base_url().'Barang');
        }else{
            echo '<script>alert("Silahkan Pilih NIK dahulu"); window.location.href="'.base_url().'Laporan/pengembalian";</script>';
        }
        // print_r($this->input->post());
    }

    public function perbaikan(){
        $v['nik'] = $this->lpr->getNik()->result(); 
        template('laporan/perbaikan', 'Perbaikan', $v);
    }

    public function add_perbaikan(){
        if($this->input->post('nik') != '--Pilih Nik--'){
            $where = [
                'id' => $this->input->post('id'),
                'nik' => $this->input->post('nik')
            ];

            $data = [
                'kerusakan' => $this->input->post('kerusakan'),
                'status' => 'perbaikan'
            ];
            $this->lpr->up_perbaikan($data, $where);
            redirect(base_url().'Barang');
        }else{
            echo '<script>alert("Silahkan Pilih NIK dahulu"); window.location.href="'.base_url().'Laporan/perbaikan";</script>';
        }
        // print_r($this->input->post());
    }

}
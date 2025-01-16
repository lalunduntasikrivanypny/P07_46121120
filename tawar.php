<?php

class tawar extends controller
{
    public function index()
    {
        $this->periksa_hak_user('tawar_daftar');

        $jung['tawar'] = $this->gunakan_model("m_tawar")->all_data();
        // cetak_var($jung)
        $this->tampilkan_view("f_tawar/v_daftar_tawar_120", $jung);
    }

    public function input($ciaw = " ")
    {
        $this->periksa_hak_user('tawar_ied');

        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_tawar'] = $this->gunakan_model("m_detail_tawar")->based_id($ciaw);
        $jung['tawarid'] = $this->gunakan_model("m_tawar")->based_id($ciaw);
        $this->tampilkan_view("f_tawar/v_input_tawar_120", $jung);
    }

    public function tampil($ciaw = " ")
    {
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_tawar'] = $this->gunakan_model("m_detail_tawar")->based_id($ciaw);
        $jung['tawarid'] = $this->gunakan_model("m_tawar")->based_id($ciaw);
        $this->tampilkan_view("f_tawar/v_tampil_tawar_120", $ciaw);
    }

    public function edit($ciaw = " ")
    {
        $this->periksa_hak_user('tawar_ied');
        
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_tawar'] = $this->gunakan_model("m_detail_tawar")->based_id($ciaw);
        $jung['tawarid'] = $this->gunakan_model("m_tawar")->based_id($ciaw);
        $this->tampilkan_view("f_tawar/v_edit_tawar_120", $ciaw);
    }

    public function hapus($ciaw = " ")
    {
        $this->periksa_hak_user('tawar_ied');
        
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_tawar'] = $this->gunakan_model("m_detail_tawar")->based_id($ciaw);
        $jung['tawarid'] = $this->gunakan_model("m_tawar")->based_id($ciaw);
        $this->tampilkan_view("f_tawar/v_hapus_tawar_120", $jung);
    }

    public function ask_data($ciaw = " ")
    {
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);
        echo json_encode($jung);
    }
    // input barang
    public function proses_input()
    {
        // cetak_var($_POST);
        $jung = $this->gunakan_model("m_tawar")->save($_POST);

        // simpan detail
        foreach ($_POST['detail'] as $miw => $isi) :
            $isi['mtawar']= $jung;
            $this->gunakan_model("m_detail_tawar")->save($isi);
            // echo "simpami ini<br>";
        endforeach;

        // jika di $_POST ada index kosong
        // memeriksa isi di $_POST
        if ($_POST['panawaran'] == "") {
            // mengalihkan ke halaman eror
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['alamat'] == "") {
            // mengalihkan ke halaman eror
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['tgl'] == "") {
            // mengalihkan ke halaman eror
            header("location:" . APLIKASI . "/eror/index");
            die;
        }


        header("location:" . APLIKASI . "/tawar");
    }

    public function proses_edit()
    {
        // cetak_var($_POST);
        $jung = $this->gunakan_model("m_tawar")->edit($_POST);

        // simpan detail 
        foreach($_POST['detail'] as $miw => $isi) :
            $this->gunakan_model("m_detail_tawar")->edit($isi);
        endforeach;

        header("location:" . APLIKASI . "/tawar");
    }
    public function proses_delete()
    {
        
        $jung = $this->gunakan_model("m_tawar")->delete($_POST);
        $jung = $this->gunakan_model("m_detail_tawar")->delete($_POST);
        // cetak_var($_POST);

        header("location:" . APLIKASI . "/tawar");
    }
}

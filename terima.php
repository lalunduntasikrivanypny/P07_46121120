<?php

class terima extends controller
{
    public function index()
    {
        $this->periksa_hak_user('terima_daftar');

        $jung['terima'] = $this->gunakan_model("m_terima")->all_data();
        // cetak_var($jung);
        $this->tampilkan_view("f_terima/v_daftar_terima_118", $jung);
    }

    public function input($ciaw)
    {
        $this->periksa_hak_user('terima_ied');

        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['terimaid'] = $this->gunakan_model("m_tawar")->based_id($ciaw);
        $jung['detail_terima'] = $this->gunakan_model("m_detail_tawar")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_terima/v_input_terima_120", $jung);
    }

    public function tampil($ciaw)
    {
        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        $this->tampilkan_view("f_terima/v_tampil_terima_120", $jung);
    }

    public function edit($ciaw)
    {
        $this->periksa_hak_user('terima_ied');

        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_terima/v_edit_terima_120", $jung);
    }

    public function hapus($ciaw = " ")
    {
        $this->periksa_hak_user('terima_ied');

        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data($ciaw);
        // $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        $this->tampilkan_view("f_terima/v_hapus_terima_120", $jung);
    }

    public function ask_data($ciaw = " ")
    {
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);
        echo json_encode($jung);
    }

    // input pesanan
    public function proses_input()
    {
        // simpan master
        $jung = $this->gunakan_model("m_terima")->save($_POST);
        // cetak_var($_POST);

        foreach ($_POST['detail'] as $miw => $isi) :
            // cetak_var($isi);
            $isi['mterima'] = $jung;
            // cetak_var($isi);
            $this->gunakan_model("m_detail_terima")->save($isi);
        // // echo "simpanmi ini<br>";
        endforeach;

        if ($_POST['tglpesanan'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        header("location:" . APLIKASI . "/terima/index");
    
    }

    public function proses_edit()
    {
        // simpan master
        $jung = $this->gunakan_model("m_terima")->edit($_POST);
        // cetak_var($_POST);

        //simpan detail
        foreach ($_POST['detail_terima'] as $urutan => $isi) :
            $this->gunakan_model("m_detail_terima")->edit($isi);
        endforeach;
        header("location:" . APLIKASI . "/terima/index");
    }

    public function proses_delete()
    {
        // simpan master
        $jung = $this->gunakan_model("m_terima")->delete($_POST);
        $jung = $this->gunakan_model("m_detail_terima")->delete($_POST);
        // cetak_var($_POST);

        header("location:" . APLIKASI . "/terima");
    }
}

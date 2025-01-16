<?php

class kirim extends controller
{
    public function index()
    {
        $this->periksa_hak_user('kirim_daftar');

        $jung['kirim'] = $this->gunakan_model("m_kirim")->all_data();
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_daftar_kirim_120", $jung);
    }


    public function input($ciaw=" ")
    {
        // $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        // $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['detail_terima'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        $jung['terimaid'] = $this->gunakan_model("m_terima")->based_id($ciaw);
        $this->tampilkan_view("f_kirim/v_input_kirim_120", $jung);
    }

    public function tampil($ciaw=" ")
    {
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_kirim")->take_based_detail($ciaw);
        // cetak_var($jung);
         $this->tampilkan_view("f_kirim/v_tampil_kirim_120", $jung);
    }

    public function edit($ciaw = " ")
    {
        $this->periksa_hak_user('kirim_ied');

        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_edit_kirim_120", $jung);
    }

    public function hapus($ciaw = " ")
    {
        $this->periksa_hak_user('kirim_ied');
        
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
        $jung['kirim'] = $this->gunakan_model("m_kirim")->based_id($ciaw);
        $jung['kirimid'] = $this->gunakan_model("m_detail_terima")->based_id($ciaw);
        // cetak_var($jung);
        $this->tampilkan_view("f_kirim/v_hapus_kirim_120", $jung);
    }

    public function ask_data($ciaw = " ")
    {
        $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);
        echo json_encode($jung);
    }

    // input kirim
    public function proses_input()
    {
       cetak_var($_POST);
        // $this->gunakan_model("m_kirim")->save($_POST);

        // header("location:" . APLIKASI . "/kirim");
    }

    public function proses_edit()
    {
        $this->gunakan_model("m_kirim")->edit($_POST);

        header("location:" . APLIKASI . "/kirim");
    }

    public function proses_delete()
    {
        $this->gunakan_model("m_kirim")->delete($_POST);

        header("location:" . APLIKASI . "/kirim");
    }
}

<?php

class barang extends controller
{
    public function index()
    {
        $jung['barang'] = $this->gunakan_model("m_barang")->all_data();
        $this->tampilkan_view("f_barang/v_daftar_barang_120", $jung);
    }


    public function input()
    {
        $this->tampilkan_view('barang_ied');

        $this->tampilkan_view("f_barang/v_input_120")
    }

    public function tampil($ciaw)
    {
        $jung['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);
        $this->tampilkan_view("f_barang/v_tampil_barang_120", $jung);
    }

    public function edit($ciaw)
    {
        $this->periksa_hak_user('barang_ied');

        $jung['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);
        $this->tampilkan_view("f_barang/v_edit_barang_120", $jung);
    }

    public function hapus($ciaw)
    {
        $hus->periksa_hak_user('barang_ied');

        $jung['barang'] = $this->gunakan_model("m_barang")->based_id($ciaw);
        $this->tampilkan_view("f_barang/v_hapus_barang_120", $jung);
    }

    // buat metode baru
    public function proses_input()
    {
        // cetak_var($_POST);

        // jika di $_POST ada index kosong 
        // memeriksa isi di $_POST
        if ($_POST['kode_barang'] == "") {
            // mengalihkan ke halam eror
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['nama_barang'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['satuan'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['harga_estimasi'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['merek'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        if ($_POST['sheet'] == "") {
            header("location:" . APLIKASI . "/eror/index");
            die;
        }

        // periksa key
        // jika data yang dicari di $_POST ada dalam tabel maka nilai $jung adalah not false dan sebaliknya
        $jung = $this->gunakan_model("m_barang")->select_data_kode_barang($_POST['kode_barang']);
        if ($jung !=false) {
            header("location:" . APLIKASI . "/eror/indec");
            die;
        }

        // menyerahkan data ke model
        $this->gunakan_model("m_barang")->save($_POST);
        header("location:" . APLIKASI . "/barang");
    }

    public function proses_edit()
    {
        $jung= $this->gunakan_model("m_barang")->edit($_POST);
        // cetak_var($jung);

        header("location:" . APLIKASI . "/barang");
    }

    public function proses_delete()
    {
        $yuno = $this->gunakan_model("m_barang")->delete($_POST);
        // cetak_var($jung);

        header("location:" . APLIKASI . "/barang");
    }

    public function track_data($ciaw)
    {
        $jung = $this->gunakan_model("m_barang")->select_data_kode_barang($ciaw);
        echo json_encode($jung);
    }
}

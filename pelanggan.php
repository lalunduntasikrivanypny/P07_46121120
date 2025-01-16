<?php

class pelanggan extends controller
{
  public function index()
  {
    $this->periksa_hak_user('pelanggan_daftar');

    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();
    $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function tampil($ciaw)
  {
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function input($ciaw)
  {
    $this->periksa_hak_user('pelanggan_ied');
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function edit($ciaw)
  {
    $this->periksa_hak_user('pelanggan_ied');
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function hapus($ciaw)
  {
    $this->periksa_hak_user('pelanggan_ied');
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->based_data($ciaw);

    echo json_encode($jung);
    // $this->tampilkan_view("f_pelanggan/v_pelanggan_120", $jung);
  }

  public function proses_input()
  {
    // cetak_var($_POST);
    $this->gunakan_model("m_pelanggan")->save($_POST);
    
    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();

    echo json_encode($jung);
  }

  public function proses_edit()
  {
    $this->gunakan_model("m_pelanggan")->edit($_POST);

    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();

    echo json_encode($jung);
  }

  public function proses_delete()
  {
    $this->gunakan_model("m_pelanggan")->delete($_POST);

    $jung['pelanggan'] = $this->gunakan_model("m_pelanggan")->all_data();

    echo json_encode($jung);
  }

  public function track_data($ciaw)
  {
    $jung = $this->gunakan_model("m_pelanggan")->select_data_kode_pelanggan($ciaw);
    echo json_encode($jung);
  }
}

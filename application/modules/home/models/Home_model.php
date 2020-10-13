<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
  function listBerita()
  {
    $this->db->select('tbl_berita.*,
                            tbl_kategori.nama_kategori')
      ->from('tbl_berita')
      ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kategori.id_kategori', 'LEFT');
    return $this->db->get()->result();
  }
}

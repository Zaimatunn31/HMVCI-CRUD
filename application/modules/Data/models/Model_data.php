<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_buku(){
		$sql = $this->db->query("SELECT * FROM tbl_buku WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$judul = $this->db->escape($post['judul']);
		$tanggal = $this->db->escape($post['tanggal']);
		$karang = $this->db->escape($post['karang']);

		$sql = $this->db->query("INSERT INTO tbl_buku VALUES (NULL, $judul, $tanggal, $karang, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM tbl_buku WHERE id_buku = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul = $this->db->escape($post['judul']);
		$tanggal = $this->db->escape($post['tanggal']);
		$karang = $this->db->escape($post['karang']);

		$sql = $this->db->query("UPDATE tbl_buku SET nama_buku = $judul, tanggaL_terbit = $tanggal, pengarang = $karang WHERE id_buku = ".intval($id));

		return true;
	}

	public function hapus($id_buku){
		$sql = $this->db->query("UPDATE tbl_buku SET flag = 0 WHERE id_buku = ".intval($id_buku));
	}	

}
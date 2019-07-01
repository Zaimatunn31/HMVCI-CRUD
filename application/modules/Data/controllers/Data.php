<?php
Class Data extends MX_Controller{
	// untuk menampilkan views data_buku
	function __construct() {
	    parent::__construct();
	    $this->load->helper('form');
	    $this->load->helper('url');
	}

	public function index(){
		$this->load->model("model_data");
		$data['list_buku'] = $this->model_data->load_buku();

		$this->load->view("data_buku",$data);
	}


	public function add(){
		$this->load->model("model_data");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_data->simpan($_POST);
			redirect("data");
		}

		$this->load->view("form_buku",$data);
	}

	

	public function edit($id){
		$this->load->model("model_data");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_data->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_data->update($_POST, $id);
			redirect("data");
		}

		$this->load->view("form_buku",$data);
	}


	public function delete($id){
		$this->load->model("model_data");
		$this->model_data->hapus($id);
		redirect("data");
	}
}
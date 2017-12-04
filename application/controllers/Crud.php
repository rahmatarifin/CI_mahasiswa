<?php
Class Crud extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud');
	}
	
	function index(){
		$data['data']=$this->model_crud->tampilData();
		$this->load->view('view_crud', $data);
	}

	function tambah(){
		$data = array(
			'nim'=>$this->input->post('nim'),
			'nama'=>$this->input->post('nama'),
			'jurusan'=>$this->input->post('jurusan'),
			'alamat'=>$this->input->post('alamat')
			);
		$this->model_crud->tambah($data);
		redirect('crud');
	}

	function edit(){
		$nim=$this->uri->segment(3);
		$data['data']=$this->model_crud->per_id($nim);
		$this->load->view('update_crud',$data);
	}

	function update(){
		$nim=$this->input->post('nim');
		$data=array(
			'nama'=>$this->input->post('nama'),
			'jurusan'=>$this->input->post('jurusan'),
			'alamat'=>$this->input->post('alamat')
			);
		$this->model_crud->update($nim, $data);
		redirect('crud');
	}

	function hapus(){
		$nim=$this->uri->segment(3);
		$this->model_crud->hapus($nim);
		redirect('crud');
	}
}
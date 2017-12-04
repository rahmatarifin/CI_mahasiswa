<?php
	Class Mahasiswa extends Ci_controller
	{
		function __construct()
		
		{
			parent::__construct();
			$this->load->model('model_mahasiswa');
		}
		
		function index(){
			$data['data']=$this->model_mahasiswa->tampilData();
			$this->load->view('mahasiswa',$data);

		}

		function tambah(){
			$rows = array('nim'=>$this->input->post('nim'),
				'nama'=>$this->input->post('nama'),
				'jurusan'=>$this->input->post('jurusan'),
				'alamat'=>$this->input->post('alamat')
				);
			$this->db->insert('mahasiswa',$rows);
			redirect (site_url('crud'));
		}
		

	}	
?>
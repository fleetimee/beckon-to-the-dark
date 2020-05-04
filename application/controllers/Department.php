<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function index()
	{
		$konten = $this->load->view('department/list_department', null, true);

		$data_json = array(
			'konten' => $konten,
			'title' => 'List Department',
		);

		echo json_encode($data_json);
	}
}
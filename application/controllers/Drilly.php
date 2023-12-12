<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Drilly extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rin_model');
	}

	public function index()
	{
		$data = array(
			'user' => $this->rin_model->showcarousel(),
			'userd' => $this->rin_model->showcontent(),
			'userb' => $this->rin_model->showcategory(),
			'configt' => $this->db->get_where('configtab', array('id' => '1'))->result_array(),
			'recent' => $this->rin_model->showrecentcontent()
		);

		$this->load->view('home', $data);
	}
	public function contents()
	{
		$uid = $this->uri->segment(2);
		$data = array(
			'userd' => $this->rin_model->showcontentid($uid),
			'configt' => $this->db->get_where('configtab', array('id' => '1'))->result_array(),
			'userb' => $this->rin_model->showcategory(),
			'recent' => $this->rin_model->showrecentcontent()
		);
		$this->load->view('contents', $data);
	}
	public function category()
	{
		$uid = $this->uri->segment(2);
		$data = array(
			'configt' => $this->db->get_where('configtab', array('id' => '1'))->result_array(),
			'cat' => $this->db->get_where('category', array('category_id' => $uid))->result_array(),
			'user' => $this->rin_model->showcarousel(),
			'userd' => $this->rin_model->showcategoryid($uid),
			'userb' => $this->rin_model->showcategory(),
			'recent' => $this->rin_model->showrecentcontent()
		);
		$this->load->view('category', $data);
	}
	public function gallery()
	{
		$data = array(
			'userd' => $this->rin_model->showgallery(),
			'userb' => $this->rin_model->showcategory(),
			'configt' => $this->db->get_where('configtab', array('id' => '1'))->result_array(),
			'recent' => $this->rin_model->showrecentcontent()
		);

		$this->load->view('gallery', $data);
	}
	public function feedback()
	{
		$data = array(
			'userd' => $this->rin_model->showgallery(),
			'userb' => $this->rin_model->showcategory(),
			'configt' => $this->db->get_where('configtab', array('id' => '1'))->result_array(),
			'recent' => $this->rin_model->showrecentcontent()
		);

		$this->load->view('feedback', $data);
	}
	public function feedbackact()
	{
		$this->rin_model->feedbackact();
		$this->session->set_flashdata('alert', " <div class='row'>
		<div class='col mt-2'>
			<div class='alert alert-success' role='alert'>
				Terima kasih, saran Anda sudah terkirim!
			</div>
		</div>
	</div>");
		redirect('feedback');
	}
}

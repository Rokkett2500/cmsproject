<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Defcon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata("nama") == NULL) {
			redirect('auth');
		}
		$this->load->model('miku_model');
	}
	public function index()
	{
		redirect('content');
	}
	public function user()
	{
		if ($this->session->userdata('level') != 'Admin') {
			$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
		You cannot access this page.
	  </div></div></div>");
			redirect('content');
		}
		$data['user'] = $this->miku_model->showuser();
		$this->load->view('user', $data);
	}
	public function adduser()
	{
		
		$this->load->view('adduser');
	}
	public function adduseract()
	{
		$this->miku_model->adduseract();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully added.
	  </div></div></div>");
		redirect('user');
	}
	public function edituser()
	{
		$uid = $this->input->post('uid');
		$data['userd'] = $this->miku_model->showuserid($uid);
		$this->load->view('edituser', $data);
	}
	public function edituseract()
	{
		$this->miku_model->edituseract();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully edited.
	  </div></div></div>");
		redirect('user');
	}
	public function deleteuseract()
	{
		$this->miku_model->deleteuseract();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully deleted.
	  </div></div></div>");
		redirect('user');
	}
	public function category()
	{
		if ($this->session->userdata('level') != 'Admin') {
			$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
		You cannot access this page.
	  </div></div></div>");
			redirect('content');
		}
		$data['user'] = $this->miku_model->showcategory();
		$this->load->view('category', $data);
	}
	public function addcategory()
	{
		$this->load->view('addcategory');
	}
	public function addcategoryact()
	{
		$this->miku_model->addcategoryact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully added.
	  </div></div></div>");
		redirect('category');
	}
	public function editcategory()
	{
		$uid = $this->input->post('uid');
		$data['userd'] = $this->miku_model->showcategoryid($uid);
		$this->load->view('editcategory', $data);
	}
	public function editcategoryact()
	{
		$this->miku_model->editcategoryact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully edited.
	  </div></div></div>");
		redirect('category');
	}
	public function deletecategoryact()
	{
		$this->miku_model->deletecategoryact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully deleted.
	  </div></div></div>");
		redirect('category');
	}
	public function content()
	{
		$data['user'] = $this->miku_model->showcontent();
		$this->load->view('content', $data);
	}
	public function addcontent()
	{
		$data = array(
			'user' => $this->miku_model->showcategory()
		);
		$this->load->view('addcontent', $data);
	}
	public function addcontentact()
	{
		$this->miku_model->addcontentact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully added.
	  </div></div></div>");
		redirect('content');
	}
	public function editcontent()
	{
		$uid = $this->input->post('uid');
		$data = array(
			'user' => $this->miku_model->showcategory(),
			'userd' => $this->miku_model->showcontentid($uid),
		);
		$this->load->view('editcontent', $data);
	}
	public function editcontentact()
	{
		$this->miku_model->editcontentact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully edited.
	  </div></div></div>");
		redirect('content');
	}

	public function deletecontentact()
	{
		$this->miku_model->deletecontentact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully deleted.
	  </div></div></div>");
		redirect('content');
	}
	public function carousel()
	{
		$data['user'] = $this->miku_model->showcarousel();
		$this->load->view('carousel', $data);
	}
	public function addcarousel()
	{
		$this->load->view('addcarousel');
	}
	public function addcarouselact()
	{
		$this->miku_model->addcarouselact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully added.
	  </div></div></div>");
		redirect('carousel');
	}
	public function deletecarouselact()
	{
		$this->miku_model->deletecarouselact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully deleted.
	  </div></div></div>");
		redirect('carousel');
	}
	public function configt()
	{
		if ($this->session->userdata('level') != 'Admin') {
			$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
		You cannot access this page.
	  </div></div></div>");
			redirect('content');
		}
		$data['userd'] = $this->miku_model->showconfigid();
		$this->load->view('configt', $data);
	}
	public function editconfigact()
	{
		$this->miku_model->editconfigact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully edited.
	  </div></div></div>");
		redirect('configt');
	}
	public function gallery()
	{
		$data['user'] = $this->miku_model->showgallery();
		$this->load->view('gallery', $data);
	}
	public function addgallery()
	{
		$this->load->view('addgallery');
	}
	public function addgalleryact()
	{
		$this->miku_model->addgalleryact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully added.
	  </div></div></div>");
		redirect('gallery');
	}
	public function deletegalleryact()
	{
		$this->miku_model->deletegalleryact();
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully deleted.
	  </div></div></div>");
		redirect('gallery');
	}
	public function feedback()
	{
		$data['user'] = $this->db->get('feedback')->result();
		$this->load->view('feedback', $data);
	}
	public function deletefeedbackact()
	{
		$sid = $this->input->post('sid');
		$this->db->where('id', $sid);
        $this->db->delete('feedback');
		$this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-success' role='alert'>
		Data successfully deleted.
	  </div></div></div>");
	  redirect('feedback');
	}
}

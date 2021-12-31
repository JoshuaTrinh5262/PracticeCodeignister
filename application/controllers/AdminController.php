<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminController extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function signin() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$signin = $this->admin_model->staff_signin($email,$password);
		if ($signin) {
			foreach ($signin as $row) {
				$newdata = array(
					'id'				=> $row['id'],
					'username' 			=> $row['username'],
					'gmail' 			=> $row['gmail'],
					'password' 			=> $row['password'],
					'profile_picture' 	=> $row['profile_picture'],
				);
				$this->session->set_userdata($newdata);
			}
			echo "<script> alert('Đăng Nhập Thành Công');</script>";
			redirect('admin/dashboard');
		} else {
			echo "<script> alert('Đăng Nhập Không Thành Công');</script>";
			echo "<script> window.location.href='../admin/login';</script>";
		}
	}
	public function login() {
		$this->load->view('admin/login');
	}
	public function signout() {
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	public function register() {
		$this->load->view('admin/register');
	}
	public function forgot_password() {
		$this->load->view('admin/forgot-password');
	}
	public function dashboard() {
		$data['dashboard'] = 'active';
		if ($this->session->userdata('id') != '') {
			$giaodien['sidebar'] 	= $this->load->view('admin/includes/sidebar', $data, TRUE);
			$giaodien['topbar'] 	= $this->load->view('admin/includes/topbar', '', TRUE);
			$giaodien['content'] 	= $this->load->view('admin/dashboard', NULL, TRUE);
			$giaodien['footer'] 	= $this->load->view('admin/includes/footer', NULL, TRUE);
			$this->load->view('admin/includes/index', $giaodien);
		} else {
			redirect('admin/login');
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('fecth_activity');
		$resutl_activity = $this->fecth_activity->select();
		$data=array("data_result"=>$resutl_activity);
        $this->load->view('homepage',$data);
    }
	public function login()
	{
        $this->load->view('login');
	}
	public function dashboard()
	{
	$this->load->view('dashboard');
	$this->load->view('table.php');
	}
	public function studentdata()
	{
	$this->load->model('student');
	$resutl_students = $this->student->select();
	$data=array("data_result"=>$resutl_students);
	$this->load->view('dashboard');
	$this->load->view('students',$data);
	}
	public function activityselect()
	{
	$this->load->model('fecth_term');
	$resutl_term = $this->fecth_term->select();
	$data=array("data_result"=>$resutl_term);
	$this->load->view('dashboard');
	$this->load->view('select',$data);
	}
	public function activitydata()
	{
	$select=(isset($_POST["select"])?$_POST["select"]:"");
	$this->load->model('fecth_activity');
	$resutl_activity= $this->fecth_activity->select_where($select);
	$data=array("data_result"=>$resutl_activity);
	$this->load->view('dashboard');
	$this->load->view('activity',$data);
	}
	public function certificate()
	{
	$this->load->view('dashboard');	
    $this->load->view('certificate');
	}
	public function calendar_select()
	{
	$this->load->model('fecth_term');
	$resutl_term = $this->fecth_term->select();
	$data=array("data_result"=>$resutl_term);
	$this->load->view('calendar',$data);
	}
	public function calendar()
	{
		$select=(isset($_POST["select"])?$_POST["select"]:"");
		$this->load->model('fecth_activity');
		$resutl_activity= $this->fecth_activity->select_where($select);
		$data=array("data_result"=>$resutl_activity);
		$this->load->view('activity',$data);
	}
}

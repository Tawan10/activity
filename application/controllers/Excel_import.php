<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
class Excel_import extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('excel_import_model');
		$this->load->library('excel');
	}

	function index()
	{
	$this->load->view('dashboard');
	$this->load->view('excel_import');
	}
	
	function fetch()
	{
		$data = $this->excel_import_model->select();
		$output = '
		
		<div class="table-responsive table--no-card m-b-30">
		<table class= "table table-borderless table-striped table-earning">
			<tr>
				<th>ชื่อสกุล</th>
				<th>อีเมลล์</th>
				<th>โทรศัพท์</th>
			</tr>
		';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				
				<td>'.$row->studentName.'</td>
				<td>'.$row->email.'</td>
				<td>'.$row->tel.'</td>
			</tr>
			';
		}
		$output .= '</table>'.'</div>';
		echo $output;
	}

	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$studentID = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$studentName = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$year = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$email = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$tel = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'studentID'		=>	$studentID,
						'studentName'			=>	$studentName,
						'year'				=>	$year,
						'email'		=>	$email,
						'tel'			=>	$tel 
					);
				}
			}
			$this->excel_import_model->insert($data);
			echo 'Data Imported successfully';
		}	
	}
}

?>

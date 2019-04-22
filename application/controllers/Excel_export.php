<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
class Excel_export extends CI_Controller {
	
	function index()
	{
		$this->load->model("excel_export_model");
		$data["data_result"] = $this->excel_export_model->fetch_data();
		$this->load->view('dashboard');
		$this->load->view('students',$data);
	}

	function action()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("studentID", "studentName", "year", "email", "tel");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->excel_export_model->fetch_data();

		$excel_row = 2;

		foreach($employee_data as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->studentID);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->StudentName);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->year);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->email);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->tel);
			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Employee Data.xls"');
		$object_writer->save('php://output');
	}

	
	
}

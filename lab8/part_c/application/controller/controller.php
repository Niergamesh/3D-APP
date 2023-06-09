<?php
class Controller {

	public $load;
	public $model;
	
	function __construct($pageURI = null) 
	{
		$this->load = new Load(); 
		$this->model = new Model();
		$this->$pageURI();
	}
   function home()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DApp', $data);
	}

	function apiCreateTable()
	{
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  

	function apiGetFlickrFeed()
	{
		$this->load->view('viewFlickrFeed');
	}

	function apiGetJson()
	{
		$this->load->view('viewJson');
	}

	function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();
	  $this->load->view('viewDrinks', $data);
	}
	
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		echo "Data Read Function";
	}

}
?>    
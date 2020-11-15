<?php
	class LoaddingPage extends MY_Controller {
		function __construct() {
			parent::__construct();
			$this->load->library(array('email','form_validation','session','pagination'));
			$this->load->database();       
			$this->load->model('Frontend_model');    			
			$this->load->library('pagination');
			$this->load->helper('url');	
		}
		public function index()
		{
			// ini_set('display_errors', 1);
			// ini_set('display_startup_errors', 1);
			// error_reporting(E_ALL);
			$this->data['catdetails1']            = $this->Frontend_model->get_data_cats1('tbl_product_categories');		
			$this->data['catdetails2']            = $this->Frontend_model->get_data_cats2('tbl_product_categories');		
			$this->data['getproducts_all']        = $this->Frontend_model->get_products_data('tbl_products',0);
			$this->data['getproducts_new']        = $this->Frontend_model->get_products_data('tbl_products',1);
			$this->data['getproducts_featured']   = $this->Frontend_model->get_products_data('tbl_products',2);
			$this->data['getproducts_offer']      = $this->Frontend_model->get_products_data('tbl_products',3);
			$this->front_view('index',$data);	
		}
		public function aboutus()
		{
			$data = array();
			$this->front_view('aboutus',$data);	
		}
		public function contactus()
		{
			$data = array();
			$this->front_view('contactus',$data);	
		}
		public function terms()
		{
			$data = array();
			$this->front_view('terms',$data);	
		}
		public function privacyPolicy()
		{
			$data = array();
			$this->front_view('privacy-policy',$data);	
		}
	}
?>
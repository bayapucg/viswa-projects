<?php
	class Products extends MY_Controller {
		function __construct() {
			parent::__construct();
			$this->load->library(array('email','form_validation','session','pagination'));
			$this->load->database();
			$this->load->model('Frontend_model'); 
			$this->load->library('pagination');
			$this->load->helper('url');	
		}
		public function products()
		{
			$data = array();
			$this->data['getproducts_all']        = $this->Frontend_model->get_products_data('tbl_products',0);
			$this->data['getproducts_new']        = $this->Frontend_model->get_products_data('tbl_products',1);
			$this->data['getproducts_featured']   = $this->Frontend_model->get_products_data('tbl_products',2);
			$this->data['getproducts_offer']      = $this->Frontend_model->get_products_data('tbl_products',3);
			$this->front_view('products',$data);	
		}	
		public function productview()
		{
			$data = array();
			$productname = $this->uri->segment('2');
			$resultSet   = $this->Frontend_model->get_data_product_info($productname);
			if(isset($resultSet->prdid) && $resultSet->prdid!=""){
				$this->data['getproductinfo'] = $resultSet;
				$this->front_view('productview',$data);
			}else{
				redirect(base_url().'products');
			}				
		}
		public function cartpostsubmit(){
			if(isset($_POST['prdid']) && $_POST['prdid']!=""){
				$productid = $_POST['prdid'];
				$cartitems = $_POST['fcartitem'];
				$resultSet   = $this->Frontend_model->get_data_product_id($productid);
				if(isset($resultSet->prdid) && $resultSet->prdid!=""){
					$price      = $resultSet->product_price; 
					$dprice     = $resultSet->afterdiscoutprice; 
					$cartprice  = $cartitems * $dprice; 
					if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
						$ipaddress = '120.0.01';
					}else{
						$ipaddress = $_SERVER['REMOTE_ADDR'];
					}
					$dataarray = array(
						'prodid'    => $productid,
						'ipaddress' => $ipaddress,
						'cartitems' => $cartitems,
						'price'     => $price,
						'dprice'    => $dprice,
						'cartprice' => $cartprice,
						'createdat' => date('Y-m-d H:i:s'),
					);
					$insertid = $this->Frontend_model->cartdatainsert('cartiformation',$dataarray);
					if($insertid){
						echo json_encode(array('status'=>true,'message'=>'Your item is added successfully.'));exit;
					}else{
						echo json_encode(array('status'=>false,'message'=>'Your item is not added to cart.'));exit;
					}
				}
			}
		}
	}
?>
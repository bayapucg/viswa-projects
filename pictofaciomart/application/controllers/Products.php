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
			$this->data['getproducts_all']        = $this->Frontend_model->get_products_data('tbl_products',0);
			$this->data['getproducts_new']        = $this->Frontend_model->get_products_data('tbl_products',1);
			$this->data['getproducts_featured']   = $this->Frontend_model->get_products_data('tbl_products',2);
			$this->data['getproducts_offer']      = $this->Frontend_model->get_products_data('tbl_products',3);
			if(isset($resultSet->prdid) && $resultSet->prdid!=""){
				$this->data['getproductinfo'] = $resultSet;
				$this->front_view('productview',$data);
			}else{
				redirect(base_url().'products');
			}				
		}
		public function cart(){
			$data = array();
			// ini_set('display_errors', 1);
			// ini_set('display_startup_errors', 1);
			// error_reporting(E_ALL);			
			if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
				$ipaddress = '120.0.01';
			}else{
				$ipaddress = $_SERVER['REMOTE_ADDR'];
			}
			$sql = "select SUM(cartitems) AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
			$countCartt = $this->db->query($sql)->row();
			$countCart333=0;
			if(isset($countCartt->cnt) && $countCartt->cnt!=''){
				$countCart333 = $countCartt->cnt; 
			}
			if($countCart333!=0){
				$this->data['countCart333'] = $countCart333;
				$sql = "select * from cartiformation LEFT JOIN tbl_products ON prdid = prodid WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
				$this->data['cartinfo'] = $this->db->query($sql)->result();
				$this->front_view('cart',$data);
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
					$dprice     = $resultSet->price;					
					$productprice     = $resultSet->product_price;
					if($resultSet->product_discount_type==1){
						$discountPricecal = $resultSet->product_discount_fixed;
						$dprice = $productprice - $discountPricecal;		
					}else{
						$discountPricee = $resultSet->product_discount_per;
						$discountPricecal = $productprice * ($discountPricee/100);
						$dprice = $productprice - $discountPricecal;				
					}
		
					$cartprice  = $cartitems * $dprice; 
					if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
						$ipaddress = '120.0.01';
					}else{
						$ipaddress = $_SERVER['REMOTE_ADDR'];
					}
					$sql = "select id from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1' and cartiformation.prodid='$productid'";
					$cartinfo = $this->db->query($sql)->row();
					$cartid = 0;
					if(isset($cartinfo->id) && $cartinfo->id!=""){
						$cartid = $cartinfo->id;
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
					if(isset($_POST['dtype']) && $_POST['dtype']=="minus"){
						if($cartitems==0){
							$insertid = $this->Frontend_model->deleteCartItem('cartiformation',$productid);
							$sql = "select SUM(cartitems) AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
							$countCartt = $this->db->query($sql)->row();
							$countCart333=0;
							if(isset($countCartt->cnt) && $countCartt->cnt!=''){
								$countCart333 = $countCartt->cnt;
							}
							echo json_encode(array('status'=>true,'messagesuccess'=>'success','message'=>'Your item is added successfully.','cartcnt'=>$countCart333,'productcnt'=>1,'cartprice'=>round($cartprice,2)));exit;
						}else{
							if($cartid==0){
								$insertid = $this->Frontend_model->cartdatainsert('cartiformation',$dataarray);
							}else{
								$insertid = $this->Frontend_model->cartdataupdate('cartiformation',$dataarray,$cartid);
							}					
							if($insertid){
								if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
									$ipaddress = '120.0.01';
								}else{
									$ipaddress = $_SERVER['REMOTE_ADDR'];
								}
								$sql = "select SUM(cartitems) AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
								$countCartt = $this->db->query($sql)->row();
								$countCart333=0;
								if(isset($countCartt->cnt) && $countCartt->cnt!=''){
									$countCart333 = $countCartt->cnt;
								}
								
								$sql = "select cartitems AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1' and cartiformation.prodid='$productid'";
								$countCarttt = $this->db->query($sql)->row();
								$countCart3333=0;
								if(isset($countCarttt->cnt) && $countCarttt->cnt!=''){
									$countCart3333 = $countCarttt->cnt;
								}						
								echo json_encode(array('status'=>true,'messagesuccess'=>'success','message'=>'Your item is added successfully.','cartcnt'=>$countCart333,'productcnt'=>$countCart3333,'cartprice'=>round($cartprice,2)));exit;
							}else{
								echo json_encode(array('status'=>false,'message'=>'Your item is not added to cart.'));exit;
							}
						}						
					}else{
						if($cartid==0){
							$insertid = $this->Frontend_model->cartdatainsert('cartiformation',$dataarray);
						}else{
							$insertid = $this->Frontend_model->cartdataupdate('cartiformation',$dataarray,$cartid);
						}					
						if($insertid){
							if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
								$ipaddress = '120.0.01';
							}else{
								$ipaddress = $_SERVER['REMOTE_ADDR'];
							}
							$sql = "select SUM(cartitems) AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
							$countCartt = $this->db->query($sql)->row();
							$countCart333=0;
							if(isset($countCartt->cnt) && $countCartt->cnt!=''){
								$countCart333 = $countCartt->cnt;
							}
							
							$sql = "select cartitems AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1' and cartiformation.prodid='$productid'";
							$countCarttt = $this->db->query($sql)->row();
							$countCart3333=0;
							if(isset($countCarttt->cnt) && $countCarttt->cnt!=''){
								$countCart3333 = $countCarttt->cnt;
							}						
						echo json_encode(array('status'=>true,'messagesuccess'=>'success','message'=>'Your item is added successfully.','cartcnt'=>$countCart333,'productcnt'=>$countCart3333,'cartprice'=>round($cartprice,2)));exit;
						}else{
							echo json_encode(array('status'=>false,'message'=>'Your item is not added to cart.'));exit;
						}
					}
					
				}else{
					echo json_encode(array('status'=>false,'message'=>'Your item is not added to cart.'));exit;
				}
			}
		}
	}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends MY_Controller {
    function __construct() {
		parent::__construct();
		$this->login_required();
		$this->load->model('admin/Settings_model');
		$this->load->model('admin/Common_model');
    }
	public function index()
	{
		$this->admin_view('settings');
	}

	function admin_settings(){
		if($this->input->get_post('submit')){
			if($this->input->get_post('password') !=''){
				$data1=array(
					'username'=>$this->input->get_post('username'),
					'password'=>md5($this->input->get_post('password')),
					'email'=>$this->input->get_post('email')
				);
			}else{
				$data1=array(
					'username'=>$this->input->get_post('username'),
					'email'=>$this->input->get_post('email')
				);
			}
			$id = $this->input->get_post('id');
			$result = $this->Common_model->update('tbl_admin_users_master',$data1,$id);
			if($result){
				$_SESSION['username'] = $this->input->get_post('username');
				$_SESSION['email']    = $this->input->get_post('email');
				$this->session->set_flashdata('success_message', '"Admin settings updated successfully","Success"');
				redirect(base_url().'admin/settings/admin_settings');
			}else{
				$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
				redirect(base_url().'admin/settings/admin_settings');	
			}
		}
		$this->data['page_title']='Admin Settings';
		$this->data['page']='admin_setting';
		$this->data['details']=$this->Common_model->get_data('tbl_admin_users_master');
		$this->admin_view('admin_setting');
	}
	
	public function product_lists(){
		if(isset($_GET["catid"]) && $_GET["catid"]!=""){
			$id = $_GET["catid"];
		}else{
			$id ="";
		}
		$this->data['page_title']='Product Items';
		$this->data['page']='product_lists';
		$this->data['details']=$this->Common_model->get_data_items('tbl_products',$id);
		$this->data['cat_details']=$this->Common_model->get_data_cats('tbl_product_categories');
		$this->admin_view('product_lists');
	}
	public function add_giftcard(){
		if(isset($_POST['gcname']) && $_POST['gcname']!=""){
			$error = 1;
			if(isset($_FILES['gcimage']['name']) && $_FILES['gcimage']['name'] != ''){
				$catimgg = date('dmYHis').str_replace(" ", "", basename($_FILES['gcimage']['name']));
				$catimg = 'giftcards_images/'.$catimgg;
				if(move_uploaded_file($_FILES['gcimage']['tmp_name'],$catimg)){
					$error = 1;
				}else{
					$error = 0;
				}
			}
			$error1 = 1;
			$cateInserted = $this->Common_model->updatedInsertedGiftCard($_POST,$catimgg,$catthumbimgg);
			if($cateInserted){
				if(isset($_POST['h_gcid']) && $_POST['h_gcid']!=""){					
					$this->session->set_flashdata('success_message', '"Gift Card updated successfully","Success"');
				}else{
					$this->session->set_flashdata('success_message', '"Gift Card inserted successfully","Success"');
				}				
				redirect(base_url().'admin/settings/giftcard_list');
			}
		}else{
			$this->data['page_title']='Add Giftcard';
			$this->data['page']='add_giftcard';
			$this->admin_view('add-giftcard');
		}
	}
	public function giftcard_actions($id,$type){
		if($id){
			$result = $this->Common_model->giftcard_actions($id,$type);
			if($result){
				$this->session->set_flashdata('success_message','"Status Changed Successfully","Success"');
				echo '<script>window.history.go(-1)</script>';
			}else{
				$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
				echo '<script>window.history.go(-1)</script>';
			}
		}else{
			$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
			echo '<script>window.history.go(-1)</script>';
		}		
	}
	public function edit_giftcard(){
		if(isset($_POST['gcname']) && $_POST['gcname']!=""){
			$error = 1;
			if(isset($_FILES['gcimage']['name']) && $_FILES['gcimage']['name'] != ''){
				$catimgg = date('dmYHis').str_replace(" ", "", basename($_FILES['gcimage']['name']));
				$catimg = 'giftcards_images/'.$catimgg;
				if(move_uploaded_file($_FILES['gcimage']['tmp_name'],$catimg)){
					$error = 1;
				}else{
					$error = 0;
				}
			}else if(isset($_POST['h_gcimage']) && $_POST['h_gcimage']!= ''){
				$catimgg = $_POST['h_gcimage'];				
			}
			$error1 = 1;
			$cateInserted = $this->Common_model->updatedInsertedGiftCard($_POST,$catimgg,$catthumbimgg);
			if($cateInserted){
				if(isset($_POST['h_gcid']) && $_POST['h_gcid']!=""){					
					$this->session->set_flashdata('success_message', '"Gift Card updated successfully","Success"');
				}else{
					$this->session->set_flashdata('success_message', '"Gift Card inserted successfully","Success"');
				}				
				redirect(base_url().'admin/settings/giftcard_list');
			}
		}else{
			$this->data['page_title']='Edit Giftcard';
			$this->data['page']='edit_giftcard';
			if(isset($_GET['id']) && $_GET['id']!=""){
				$gcid = $_GET['id'];
			}
			$this->data['catdetails']=$this->Common_model->getCard_details('giftcards',$gcid);
			$this->admin_view('edit-giftcard');
		}
	}
	public function giftcard_list(){
		$this->data['page_title']='Gift Cards';
		$this->data['page']='giftcard_list';
		$this->data['details']=$this->Common_model->get_data('giftcards');
		$this->admin_view('giftcard_list');
	}
	public function categories_list(){
		$this->data['page_title']='Product Categories';
		$this->data['page']='categories_list';
		$this->data['details']=$this->Common_model->get_data('tbl_product_categories');
		$this->admin_view('categories_list');
	}
	public function product_Item_actions($id,$type){
		if($id){
			$result = $this->Common_model->product_Item_actions($id,$type);
			if($result){
				$this->session->set_flashdata('success_message','"Status Changed Successfully","Success"');
				echo '<script>window.history.go(-1)</script>';
			}else{
				$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
				echo '<script>window.history.go(-1)</script>';
			}
		}else{
			$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
			echo '<script>window.history.go(-1)</script>';
		}		
	}
	public function category_actions($id,$type){
		if($id){
			$result = $this->Common_model->category_actions($id,$type);
			if($result){
				$this->session->set_flashdata('success_message','"Status Changed Successfully","Success"');
				echo '<script>window.history.go(-1)</script>';
			}else{
				$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
				echo '<script>window.history.go(-1)</script>';
			}
		}else{
			$this->session->set_flashdata('error_message', '"Please try again later.","Failed!"');
			echo '<script>window.history.go(-1)</script>';
		}		
	}
	public function edit_category(){
		if(isset($_POST['category_name']) && $_POST['category_name']!=""){
			$error = 1;
			if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
				$catimgg = date('dmYHis').str_replace(" ", "", basename($_FILES['file']['name']));
				$catimg = 'product_images/'.$catimgg;
				if(move_uploaded_file($_FILES['file']['tmp_name'],$catimg)){
					$error = 1;
				}else{
					$error = 0;
				}
			}else if(isset($_POST['h_catimg']) && $_POST['h_catimg']!=""){
				$catimgg = $_POST['h_catimg'];
			}
			
			$cateInserted = $this->Common_model->updatedInsertedCategory($_POST,$catimgg,$catthumbimgg);
			if($cateInserted){
				if(isset($_POST['h_cat_id']) && $_POST['h_cat_id']!=""){					
					$this->session->set_flashdata('success_message', '"Product Category updated successfully","Success"');
				}else{
					$category_ref_id = 'CAT_0'.$cateInserted;
					$category_ref_id = $this->Common_model->updatedInsertedcategory_ref_id($cateInserted,$category_ref_id);
					$this->session->set_flashdata('success_message', '"Product Category inserted successfully","Success"');
				}				
				redirect(base_url().'admin/settings/categories_list');
			}
		}else{
			$this->data['page_title']='Edit Category';
			$this->data['page']='edit_category';
			if(isset($_GET['id']) && $_GET['id']!=""){
				$cat_id = $_GET['id'];
			}
			$this->data['catdetails']=$this->Common_model->getCategory_details('tbl_product_categories',$cat_id);
			$this->admin_view('edit-category');
		}
	}
	public function add_category(){
		if(isset($_POST['category_name']) && $_POST['category_name']!=""){
			$error = 1;
			if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
				$catimgg = date('dmYHis').str_replace(" ", "", basename($_FILES['file']['name']));
				$catimg = 'product_images/'.$catimgg;
				if(move_uploaded_file($_FILES['file']['tmp_name'],$catimg)){
					$error = 1;
				}else{
					$error = 0;
				}
			}
			$error1 = 1;
			$cateInserted = $this->Common_model->updatedInsertedCategory($_POST,$catimgg,$catthumbimgg);
			if($cateInserted){
				if(isset($_POST['h_cat_id']) && $_POST['h_cat_id']!=""){					
					$this->session->set_flashdata('success_message', '"Product Category updated successfully","Success"');
				}else{
					$category_ref_id = 'CAT_0'.$cateInserted;
					$category_ref_id = $this->Common_model->updatedInsertedcategory_ref_id($cateInserted,$category_ref_id);
					$this->session->set_flashdata('success_message', '"Product Category inserted successfully","Success"');
				}				
				redirect(base_url().'admin/settings/categories_list');
			}
		}else{
			$this->data['page_title']='Add Category';
			$this->data['page']='add_category';
			$this->data['details']=$this->Common_model->get_data('tbl_product_categories');
			$this->admin_view('add-category');
		}
	}
	public function add_product(){
		if(isset($_POST['category_id']) && $_POST['category_id']!=""){			
			$error = 1;
			if(isset($_FILES['product_image']['name']) && $_FILES['product_image']['name'] != ''){
				$product_image = date('dmYHis').str_replace(" ", "", basename($_FILES['product_image']['name']));
				$productimage = 'product_images/'.$product_image;
				if(move_uploaded_file($_FILES['product_image']['tmp_name'],$productimage)){
					$error = 1;
				}else{
					$error = 0;
				}
			}else if(isset($_POST['h_product_image']) && $_POST['h_product_image']!=""){
				$product_image = $_POST['h_product_image'];
			}
			$error1 = 1;
			if(isset($_FILES['product_thumb_image1']['name']) && $_FILES['product_thumb_image1']['name'] != ''){
				$product_thumb_image1 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image1']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image1;
				if(move_uploaded_file($_FILES['product_thumb_image1']['tmp_name'],$productthumbimage)){
					$error1 = 1;
				}else{
					$error1 = 0;
				}			
			}
			$error2 = 1;
			if(isset($_FILES['product_thumb_image2']['name']) && $_FILES['product_thumb_image2']['name'] != ''){
				$product_thumb_image2 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image2']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image2;
				if(move_uploaded_file($_FILES['product_thumb_image2']['tmp_name'],$productthumbimage)){
					$error2 = 1;
				}else{
					$error2 = 0;
				}			
			}
			$error3 = 1;
			if(isset($_FILES['product_thumb_image3']['name']) && $_FILES['product_thumb_image3']['name'] != ''){
				$product_thumb_image3 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image3']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image3;
				if(move_uploaded_file($_FILES['product_thumb_image3']['tmp_name'],$productthumbimage)){
					$error3 = 1;
				}else{
					$error3 = 0;
				}			
			}
			$error4 = 1;
			if(isset($_FILES['product_thumb_image4']['name']) && $_FILES['product_thumb_image4']['name'] != ''){
				$product_thumb_image4 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image4']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image4;
				if(move_uploaded_file($_FILES['product_thumb_image4']['tmp_name'],$productthumbimage)){
					$error4 = 1;
				}else{
					$error4 = 0;
				}			
			}
			$cateInserted = $this->Common_model->updatedInsertedProductItem($_POST,$product_image,$product_thumb_image1,$product_thumb_image2,$product_thumb_image3,$product_thumb_image4);
			if($cateInserted){
				if(isset($_POST['h_prdid']) && $_POST['h_prdid']!=""){	
					$cateInserted = $_POST['h_prdid'];
					$this->session->set_flashdata('success_message', '"Product Item updated successfully","Success"');
				}else{	
					$this->session->set_flashdata('success_message', '"Product Item inserted successfully","Success"');
				}				
				redirect(base_url().'admin/settings/product_lists');
			}
		}else{
			$this->data['page_title']='Add Product Item';
			$this->data['page']='add_product';
			$this->data['cat_details'] = $this->Common_model->get_data_cats('tbl_product_categories');
			$this->admin_view('add-product');
		}
	}
	public function edit_product(){
		if(isset($_POST['category_id']) && $_POST['category_id']!=""){			
			$error = 1;
			if(isset($_FILES['product_image']['name']) && $_FILES['product_image']['name'] != ''){
				$product_image = date('dmYHis').str_replace(" ", "", basename($_FILES['product_image']['name']));
				$productimage = 'product_images/'.$product_image;
				if(move_uploaded_file($_FILES['product_image']['tmp_name'],$productimage)){
					$error = 1;
				}else{
					$error = 0;
				}
			}else if(isset($_POST['h_product_image']) && $_POST['h_product_image']!=""){
				$product_image = $_POST['h_product_image'];
			}
			$error1 = 1;
			if(isset($_FILES['product_thumb_image1']['name']) && $_FILES['product_thumb_image1']['name'] != ''){
				$product_thumb_image1 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image1']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image1;
				if(move_uploaded_file($_FILES['product_thumb_image1']['tmp_name'],$productthumbimage)){
					$error1 = 1;
				}else{
					$error1 = 0;
				}			
			}
			$error2 = 1;
			if(isset($_FILES['product_thumb_image2']['name']) && $_FILES['product_thumb_image2']['name'] != ''){
				$product_thumb_image2 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image2']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image2;
				if(move_uploaded_file($_FILES['product_thumb_image2']['tmp_name'],$productthumbimage)){
					$error2 = 1;
				}else{
					$error2 = 0;
				}			
			}
			$error3 = 1;
			if(isset($_FILES['product_thumb_image3']['name']) && $_FILES['product_thumb_image3']['name'] != ''){
				$product_thumb_image3 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image3']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image3;
				if(move_uploaded_file($_FILES['product_thumb_image3']['tmp_name'],$productthumbimage)){
					$error3 = 1;
				}else{
					$error3 = 0;
				}			
			}
			$error4 = 1;
			if(isset($_FILES['product_thumb_image4']['name']) && $_FILES['product_thumb_image4']['name'] != ''){
				$product_thumb_image4 = date('dmYHis').str_replace(" ", "", basename($_FILES['product_thumb_image4']['name']));
				$productthumbimage = 'product_images/'.$product_thumb_image4;
				if(move_uploaded_file($_FILES['product_thumb_image4']['tmp_name'],$productthumbimage)){
					$error4 = 1;
				}else{
					$error4 = 0;
				}			
			}
			$cateInserted = $this->Common_model->updatedInsertedProductItem($_POST,$product_image,$product_thumb_image1,$product_thumb_image2,$product_thumb_image3,$product_thumb_image4);
			if($cateInserted){
				if(isset($_POST['h_prdid']) && $_POST['h_prdid']!=""){	
					$cateInserted = $_POST['h_prdid'];
					$this->session->set_flashdata('success_message', '"Product Item updated successfully","Success"');
				}else{	
					$this->session->set_flashdata('success_message', '"Product Item inserted successfully","Success"');
				}				
				redirect(base_url().'admin/settings/product_lists');
			}
		}else{
			$this->data['page_title']='Edit Product Item';
			$this->data['page']='edit_product';
			if(isset($_GET['id']) && $_GET['id']!=""){
				$prdid = $_GET['id'];
			}
			$this->data['itemdetails']=$this->Common_model->getItem_details('tbl_products',$prdid);
			$this->data['cat_details']=$this->Common_model->get_data_cats('tbl_product_categories');
			$this->admin_view('edit-product');
		}
	}
	function get_times( $default = '07:00', $interval = '+30 minutes' ) {
		$output = '';
		$current = strtotime( '00:00' );
		$end = strtotime( '23:59' );

		while( $current <= $end ) {
			$time = date( 'H:i', $current );
			$sel = ( $time == $default ) ? ' selected' : '';

			$output .= "<option value=\"{$time}\"{$sel}>" . date( 'h.i A', $current ) .'</option>';
			$current = strtotime( $interval, $current );
		}

		return $output;
	}
	
	public function get_times_out( $default = '07:00', $interval = '+30 minutes' ) {
		$output = '';
		$current = strtotime( '00:00' );
		$end = strtotime( '23:59' );
		while( $current <= $end ) {
			$time = date( 'H:i', $current );
			$sel = "";
			
			if(strtotime($time) >= strtotime($default)){
				$output .= "<option value=\"{$time}\"{$sel}>" . date( 'h.i A', $current ) .'</option>';
			}
			$current = strtotime( $interval, $current );
		}
		return $output;
	}
	function giftcard_info(){
		if(isset($_GET['gcid']) && $_GET['gcid']!=""){
			$gcid = $_GET['gcid'];
		}else{
			$gcid = 0;
		}
		$this->data['page_title']='Gift Cards List';
		$this->data['page']='giftcard_info';
		$this->data['details']=$this->Common_model->get_data('giftcards');
		$this->data['card_details_info']=$this->Common_model->get_data_giftcards('giftcards_checkcards',$gcid);		
		$this->admin_view('giftcard_info');
	}
}



<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	date_default_timezone_set('Asia/Kolkata');
	class Frontend_model extends CI_Model {
		public function updatedInsertedGiftCardInfo($dataa){							
			if($this->db->insert('giftcards_checkcards', $dataa) === FALSE){                
				return 0;
			}else{
				return $this->db->insert_id();
			}
		}		
		
		function get_data($table){
			$sql = "select * from giftcards where status = 1";
			return $this->db->query($sql)->result();
		}
		function get_data_card_info($display_url){
			$sql = "select * from giftcards where status = 1 and display_url ='$display_url'";
			return $this->db->query($sql)->row();
		}
		function get_data_product_info($product_url){
			$sql = "select * from tbl_products left join tbl_product_categories on tbl_product_categories.cat_id = tbl_products.prdid WHERE tbl_products.status = 1 and tbl_products.product_url ='$product_url'";
			return $this->db->query($sql)->row();
		}
		function get_data_cards($table,$offset,$limit){
			$sql = "select * from giftcards where status = 1 Order by displayorder  LIMIT $offset,$limit ";
			return $this->db->query($sql)->result();
		}
		function get_data_cats1($table){
			$sql = "select * from tbl_product_categories where cat_status = 1 limit 0,3";
			return $this->db->query($sql)->result();
		}
		function get_data_cats2($table){
			$sql = "select * from tbl_product_categories where cat_status = 1 limit 3,3";
			return $this->db->query($sql)->result();
		}
		function get_products_data($table,$type){
			if($type==0){
				$sql = "select * from tbl_products where status = 1 order by prdid DESC";
			}else if($type==1){
				$sql = "select * from tbl_products where status = 1 order by cat_new";
			}else if($type==2){
				$sql = "select * from tbl_products where status = 1 order by cat_featured";
			}else if($type==3){
				$sql = "select * from tbl_products where status = 1 order by cat_offer";
			}
			
			return $this->db->query($sql)->result();
		}
		function get_data_product_id($prdid){
			$sql = "select * from tbl_products left join tbl_product_categories on tbl_product_categories.cat_id = tbl_products.prdid WHERE tbl_products.status = 1 and tbl_products.prdid ='$prdid'";
			return $this->db->query($sql)->row();
		}
		public function cartdatainsert($table,$dataa){							
			if($this->db->insert($table, $dataa) === FALSE){                
				return 0;
			}else{
				return $this->db->insert_id();
			}
		}
		public function cartdataupdate($table,$dataa,$cartid){	
			$this->db->set($dataa);
			$this->db->where('id',$cartid);
			if($this->db->update($table)){
				return $cartid;
			}else{
				return false;
			}
		}
		public function deleteCartItem($table,$pid){
			$this->db->where('prodid',$pid);
			if($this->db->delete($table)){
				return $pid;
			}else{
				return false;	
			}
		}
		public function getCountCart($ipaddress){
			$sql = "select count(id) AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
			return $this->db->query($sql)->row();
		}
	}
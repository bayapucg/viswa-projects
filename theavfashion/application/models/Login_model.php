<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login_model extends CI_Model {
		function sign_up($dataarray){
			if($this->db->insert('tbl_users_master',$dataarray)){
				$this->db->where('email',$dataarray['email']);
				$this->db->where('password',$dataarray['password']);
				$res = $this->db->get('tbl_users_master');
				if($res->num_rows() == 1){
					return $this->db->where('id',$res->row()->id)->get('tbl_users_master')->row();
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		function check_email($email){
			$this->db->where('email',$email);
			$res = $this->db->get('tbl_users_master');
			if($res->num_rows() == 1){
				return $this->db->where('id',$res->row()->id)->get('tbl_users_master')->row();
			}else{
				return false;
			}
		}
		function check_login(){
			$email = $this->input->post('email');
			$pwd = md5($this->input->post('password'));
			$this->db->where('email',$email);
			$this->db->where('password',$pwd);
			$res = $this->db->get('tbl_users_master');
			if($res->num_rows() == 1){
				return $this->db->where('id',$res->row()->id)->get('tbl_users_master')->row();
			}else{
				return false;
			}
		}
	}
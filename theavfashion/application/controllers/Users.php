<?php
	class Users extends MY_Controller {
		function __construct() {
			parent::__construct();
			$this->load->library(array('email','form_validation','session','pagination'));
			$this->load->database();              
			$this->load->model('Frontend_model');            
			$this->load->model('Login_model');            
			$this->load->library('pagination');
			$this->load->helper('url');	
		}
		public function login()
		{
			$data = array();
			$this->front_view('login',$data);	
		}
		public function signup()
		{
			$datas = array();
			$this->front_view('signup',$data);	
		}
		public function logout()
		{
			session_start();
			session_destroy();
			redirect(base_url());
		}	
		public function postsubmit(){
			if(isset($_POST['sub_form']) && $_POST['sub_form']=='login_form'){
				$flag = true;
				if(isset($_POST['email']) && $_POST['email']!=""){
					$email = $_POST['email'];
				}				
				if(isset($_POST['password']) && $_POST['password']!=""){
					$password = $_POST['password'];
				}				
				$insertData = $this->Login_model->check_login($email,$password);
				if(isset($insertData->id) && $insertData->id!=""){
					$_SESSION['id']       = $insertData->id;
					$_SESSION['username'] = $insertData->user_name;
					$_SESSION['email']    = $insertData->email;
					echo json_encode(array('status'=>true,'type'=>$insertData->id));exit;
				}else{
					echo json_encode(array('status'=>false,'type'=>'confirmPwd'));exit;
				}
			}else if(isset($_POST['sub_form']) && $_POST['sub_form']=='signup_form'){
				$flag = true;
				if(isset($_POST['user_name']) && $_POST['user_name']!=""){
					$username = $_POST['user_name'];
					$data['n_username'] = "";
				}else{
					$data['n_username'] = "Please enter username.";
					$flag = false;
				}
				if(isset($_POST['email']) && $_POST['email']!=""){
					$email = $_POST['email'];
					$data['n_email'] = "";
				}else{
					$data['n_email'] = "Please enter email.";
					$flag = false;
				}				
				if(isset($_POST['password']) && $_POST['password']!=""){
					$password = $_POST['password'];
					$data['n_password'] = "";
				}else{
					$data['n_password'] = "Please enter new password.";
					$flag = false;
				}
				if(isset($_POST['cpassword']) && $_POST['cpassword']!=""){
					$cpassword = $_POST['cpassword'];
					$data['c_password'] ="";
				}else{
					$flag = false;
					$data['c_password'] = "Please enter confirm password.";
				}
				if($password != $cpassword ){
					$flag = false;
					$data['notmatch'] = "Entered passowrd and confirm password are not match.";					
				}else{
					$data['notmatch'] = "";
				}
				if($flag==true){
					$data_array = array(
						'user_name'     => $username,
						'email'         => $email, 
						'password'      => md5($cpassword),
						'status'        => 1,
						'created_date'  => date('Y-m-d H:i:s')
					);
					$checkEmailRecord = $this->Login_model->check_email($email);
					if(isset($checkEmailRecord->id) && $checkEmailRecord->id!=""){
						echo json_encode(array('status'=>false,'result'=>'emailexists'));exit;
					}else{
						$insertData = $this->Login_model->sign_up($data_array);					
						if(isset($insertData->id) && $insertData->id!=""){
							$_SESSION['id']       = $insertData->id;
							$_SESSION['username'] = $insertData->user_name;
							$_SESSION['email']    = $insertData->email;
							echo json_encode(array('status'=>true,'type'=>$insertData->id));exit;
						}else{
							echo json_encode(array('status'=>false,'type'=>'confirmPwd'));exit;
						}
					}
				}else{
					echo json_encode(array('status'=>false,'type'=>'error'));exit;
				}				
			}else if(isset($_POST['contact_form_submit']) && $_POST['contact_form_submit']=="contact_form"){
				$name    = $_POST['urname'];
				$email   = $_POST['uremail'];
				$message = $_POST['description'];		
				$to = "info@xmassupersale.com";
				$subject = "Contact Us";
				$message = "
				<html>
				<head>
				<title>Contact Form</title>
				</head>
				<body>
				<p>Email Contact Form!</p>
				<table>
				<tr>
				<th>Firstname</th>
				<th>Email</th>
				<th>Message</th>
				</tr>
				<tr>
				<td>'$name'</td>
				<td>'$email'</td>
				<td>'$message'</td>
				</tr>
				</table>
				</body>
				</html>
				";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "From: <$email>" . "\r\n";
				$headers .= "Cc: $email " . "\r\n";
				mail($to,$subject,$message,$headers);
			}else if(isset($_POST['news_forsubmit']) && $_POST['news_forsubmit']=="news_forsubmit"){
				$email   = $_POST['mmemail'];
				$to = "info@xmassupersale.com";
				$subject = "Contact Us";
				$message = "
				<html>
				<head>
				<title>Contact Form</title>
				</head>
				<body>
				<p>Email Contact Form!</p>
				<table>
				<tr>
				<th>Email</th>
				</tr>
				<tr>
				<td>'$email'</td>
				</tr>
				</table>
				</body>
				</html>
				";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "From: <$email>" . "\r\n";
				$headers .= "Cc: $email " . "\r\n";
				mail($to,$subject,$message,$headers);
			}
		}
	}
?>
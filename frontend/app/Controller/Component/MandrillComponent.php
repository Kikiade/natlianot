<?php
class MandrillComponent extends Component
{
	
	private $mandrillKey 		= "KgAGJkRYNPK69nE0i2ZkTA";
	private $curlConnection 	= null;
	
	private $mandrillUrl		= "https://mandrillapp.com/api/1.0";
	private $fromEmail			= "noreply@ikk-kubang.com/";
	private $fromEmailName		= "System";
	//private $to  				= "7nantungga@gmail.com";
	//private $to  				= "kopralrhp@gmail.com";
	private $html				= "";
	private $text				= "We appreciate the time you have spent in providing us with your data.\n\nYour answers have been saved in our confidential database. \n\nAs a thank you, in the future we will give you information regarding Code2ibiza events for your best interest. \n\nAnd also get the opportunity to be invited to our Events";
	
	var $settings;
	//mandrill key stuff
	
	public function MandrillComponent()
	{
		$Setting		=	ClassRegistry::Init("Setting");
		$setting		=	$Setting->find("first");	
		$this->settings	=	$setting["Setting"];
	}
	
	function getMandrillKey() {
		return $this->mandrillKey;
	}
	
	function setMandrillKey($newKey = null) {
		$this->mandrillKey = $newKey;
	}
	//end mandrill key stuff
	
	//CURL Connection stuff
	function createCURLConnection() {
		$this->curlConnection = curl_init();
	}
	
	function postCURLData($url = null, $postData = null) {		
		if($url == null) {
			return false;
		}
		curl_setopt($this->curlConnection, CURLOPT_URL, $url);
		curl_setopt($this->curlConnection, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	 	curl_setopt($this->curlConnection, CURLOPT_POST      ,1);
	 	curl_setopt($this->curlConnection, CURLOPT_RETURNTRANSFER, true);
	 	curl_setopt($this->curlConnection, CURLOPT_SSL_VERIFYPEER, false);
	 	if($postData != null) {
		 	curl_setopt($this->curlConnection, CURLOPT_POSTFIELDS    ,$postData);
	 	}
		
		$output = curl_exec($this->curlConnection);
		return json_decode($output);
	}
	
	function closeCURLConnection() {
		curl_close($this->curlConnection);
	}
	//end curl stuff
	
	function setText($text) {
		$this->text = $text;
		return true;
	}
	
	function setHtml($html) {
		$this->html = $html;
		return true;
	}
	
	function setTo($to){
		$this->to = $to;
		return true;
	}

	function setSubject($subject) {
		$this->subject = $subject;
		return true;
	}
	
	function setFromEmail($email) {
		$this->fromEmail = $email;
		return true;
	}
	
	function setFromEmailName($emailName) {
		$this->fromEmailName = $emailName;
		return true;
	}
	
	//mandrill stuff
	function sendMessage($toEmail = null, $toEmailName = null, $type = "text") {
		
		$url = $this->mandrillUrl."/messages/send.json";
		
		if($toEmail == null) {
			return false;
		}
		
		$key = $this->mandrillKey;	
		
		if($type == 'text') {
			$data = array(
	 		'key' => $key,
		 		'message' => array(
		 			'text' => $this->text,
		 			'subject' => $this->subject,
		 			'from_email' => $this->fromEmail,
		 			'from_name' => $this->fromEmailName,
		 			'to' => array(
		 				array(
		 					'email' => $toEmail,
		 					'name' => $toEmailName
		 				)
		 			)
		 		),
		 		'async' => true
		 	);
		} else {
			$data = array(
	 		'key' => $key,
		 		'message' => array(
		 			'html' => $this->html,
		 			'text' => $this->text,
		 			'subject' => $this->subject,
		 			'from_email' => $this->fromEmail,
		 			'from_name' => $this->fromEmailName,
		 			'to' => array(
		 				array(
		 					'email' => $toEmail,
		 					'name' => $toEmailName
		 				)
		 			)
		 		),
		 		'async' => true
		 	);
		}
	 	
	 	$data = json_encode($data);
	 	
	 	return $this->postCURLData($url, $data); 
	}
	
	function checkEmailStatus($email = null) {
		$url = $this->mandrillUrl."/rejects/list.json";
		
		if($email == null) {
			return false;
		}
		
		$data = array(
			'key' => $this->mandrillKey,
			'email' => $email
		);
		
		$data = json_encode($data);
		
		return $this->postCURLData($url, $data);
	}
	
}
<?php
class ContactController extends AppController
{
	var $uses				=	"Contact";
	var $ControllerName		=	"Contact";
	var $ModelName			=	"Contact";
	var $helpers			=	array("Text");

	

	public function index()
	{
		$this->layout = 'main';

		if(!empty($this->data) && $this->data['Contek']['email'] != "trxlj@dropjar.com")
		{
			$this->loadModel('Contek');
			$this->Contek->set($this->data);
			if($this->Contek->validates())
			{
				$save			=	$this->Contek->save();
				$id				=	$this->Contek->getLastInsertId();

				$detail = $this->Contek->findById($id);

				$form		=	"noreply@natlia.org";
				$from_text	=	"Natlia System";
				$subject    =	$detail['Contek']['subjek'];
				$html		=	$detail['Contek']['pesan'];
				$to			=	"kopralrhp@gmail.com";
				$toName		=	$detail['Contek']['name'];

				App::import('Component', 'Mandrill');
				$mandrill = new MandrillComponent();
				$mandrill->createCURLConnection();
				$mandrill->setSubject($subject);
				$mandrill->setFromEmail($form);
				$mandrill->setFromEmailName($from_text);
				$mandrill->setHtml($html);
				$test= $mandrill->sendMessage($to, $toName, 'html');
				$mandrill->closeCURLConnection();	
			}    	
        }
        $this->set(compact("data", "detail"));
	}	
}
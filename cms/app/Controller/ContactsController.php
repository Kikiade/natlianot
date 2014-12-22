<?php
class ContactsController extends AppController
{
	var $uses 				=	"Contact";
	var $ControllerName		=	"Contacts";
	var $ModelName			=	"Contact";

	public function Index()
	{
		$this->layout =	'main';
	}
}
?>
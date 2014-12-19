<?php 
class Contek extends AppModel
{
	var $name 	=	"Contek";

	var $DefaultValidate = array(
		'name' => array(
			'between' => array(
                'rule'    => array('between', 1, 100),
                'message' => 'Between 1 to 100 characters',
                'required'   => true,
                'allowEmpty' => false,
            )
		),

		'email' => array(
			'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please insert your email"
			)
		),

		'subjek' => array(
			'notEmpty' => array(
				'rule'		=> "notEmpty",
				'message'	=> "Please insert your subjek email"
			)
		)
	);
}
?>
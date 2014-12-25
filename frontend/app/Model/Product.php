<?php
class Product extends AppModel{

	var $name	=	"Product";

	var $belongsTo  = array(
			'ProductCategory' => array(
				'className' => 'ProductCategory',
				'foreignKey' => 'product_category_id',
			));

	var $hasOne = array(
		'Image' => array(
			'className' => 'Content',
			'foreignKey' => 'model_id',
			'conditions' => array(
				'Image.model' => "Product"
			)
		)
	);
}
?>
<?php

class ProductsController extends AppController
{
	var $uses				=	"Product";
	var $ControllerName		=	"Products";
	var $ModelName			=	"Product";
	var $helpers			=	array("Text", "Aimfox");

	
	public $components = array('Paginator');

    public $paginate = array(
        'order' => array(
            'Product.created' => 'desc'
        ),
    );

	public function index($category_id = null)
	{
		$this->layout= "main";

		$this->loadModel($this->ModelName);
		/*$this->Paginator->settings = $this->paginate;

		$this->Paginator->settings['conditions'] = array(
			'News.status' => 1, 
			'News.news_category_id' => $category_id
			);
		if($category_id ==  null){
			$this->Paginator->settings = $this->paginate;
		}*/

		$conditions = array("Product.status" => 1);
		if($category_id != null)
			$conditions["Product.product_category_id"] = $category_id;

		$data = $this->Paginator->paginate('Product', $conditions);

		$detail = $this->Product->find('all', array(
			'conditions' => array(
				'Product.product_category_id' => $category_id
			),
			'order' => array('Product.id desc')
		));
		if($category_id == null){
			$detail = $this->Product->find('all', array(
				'conditions' => array(
					'Product.id' => 1
					),
					'order' => array('Product.id desc')
				));
		}
		$this->set(compact("data","detail",'counter'));
	}

	public function getProductCategories()
	{
		$productCategories = $this->Product->ProductCategory->find('all', array(
			'conditions' => array(
				'ProductCategory.status' => 1
			),
			'order' => array('ProductCategory.id asc'),
			'recursive' => 0
		));
		if($this->request->is('requested')) {
			return $productCategories;
		} else {
			$this->set(compact('productCategories'));
		}
	}
}
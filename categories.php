<?php
use \Hcode\PageAdmin;

use \Hcode\Model\User;

use \Hcode\Model\Category;

$app->get("/categories/:idcategory",function($idcategory){

	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$category = new Category();

	$category->get((int)$idcategory);

	$page = new Page();

	$page->setTpl("category", [
		'category'=>$category->getValues(),
		'products'=>[]
	
	]);

});



?>
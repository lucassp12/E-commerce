<?php


use \Hcode\Page;

use \Hcode\Model\User;

use \Hcode\Model\Category;

$app->get("/categories/:idcategory",function($idcategory){
	User::verifyLogin();

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
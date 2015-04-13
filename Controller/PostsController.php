<?php

require_once('../Model/PostsModel.php');

$action = $_POST["action"];

var_dump($_POST);
exit;

$model = new PostsModel($_POST);

if($action == "add") {

	$model->add();
}

if($action == "edit") {
	
	// 例外処理 : createdのyearが異なる場合、tableをまたぐことになるのでupdateできない
	//header('Location: '.SITE_URL.'/View/edit.php?year=&err=1');
	//exit;

	$model->edit();	
}

if($action == "delete") {

	$model->delete();
}

header('Location: '.SITE_URL.'/View/index.php');
exit;
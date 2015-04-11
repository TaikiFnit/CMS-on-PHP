<?php

require_once('../Model/PostsModel.php');

$action = $_POST["action"];

$model = new PostsModel($_POST);

if($action == "add") {

	$model->add();
}

if($action == "edit") {
	
	$model->edit();	
}

if($action == "delete") {

}

header('Location: '.SITE_URL.'/View/index.php');
exit;

<?php

require_once('../Model/PostsModel.php');

$action = $_POST['action'];
$body['title'] = $_POST['title'];
$body['content'] = $_POST['content'];
$body['author'] = $_POST['author'];
$body['date'] = $_POST['date'];

if($action == "add") {
	
	$add = new add($body);	

	$add->execute();

	header('Location: '.SITE_URL.'/View/index.php');
	exit;
}

if($action == "edit") {

}

if($action == "delete") {

}

<?php

require('../config.php');
require_once('../Model/PostsModel.php');

$action = $_POST['action'];
$title = $_POST['title'];
$content = $_POST['content'];

echo '$action:'.$action;
echo '$title'.$title;
echo '$content'.$content;

if($action == "add") {
	$add = new add($title, $content);	

	$add->execute();

	header('Location: '.SITE_URL.'/View/index.php');
	exit;
}

if($action == "edit") {

}

if($action == "delete") {

}

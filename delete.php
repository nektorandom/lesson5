<?php
	//$path=__dir__.'/data/'. $_GET['file'];
	//unlink($path);
	//header('Location:read.php');
include_once("function.php");

$id = $_GET['id'];
removePost($id);
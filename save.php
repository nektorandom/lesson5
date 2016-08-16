<?php

	/*$path=dirname(_FILE_).'/data/'.$_POST['filename'];

		file_put_contents($path, $_POST['data']);
		header('Location:read.php');*/
		require_once("function.php");
		//$a = getPosts();
		//var_dump($a);
		addPost($_POST['data']);
<?php
// ROUTER PRINCIPAL



// ROUTE PAR DEFAULT: liste des posts
	//  PATTERN: 
	//	CTRL: pagesController
	//	ACTION: homeAction
	//	TITLE: Alex Parker - Blog
	include_once '../app/controllers/pagesController.php';
    	\App\Controllers\PagesController\homeAction($connexion);


// ROUTE DETAIL D'UN POST: detail d'un post
	//  PATTERN: /?postId=x
	//	CTRL: postsController
	//	ACTION: showAction
//	if(isset($_GET['postId'])):
//		include_once 'app/controllers/postsController.php';
//	
//		\App\Controllers\PostsController\showAction($connexion, $_GET['postID']);
//	else :	
//		
//	endif;

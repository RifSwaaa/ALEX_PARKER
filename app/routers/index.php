<?php
// ROUTER PRINCIPAL



// ROUTE PAR DEFAULT: liste des posts
	//  PATTERN: 
	//	CTRL: pagesController
	//	ACTION: homeAction
	//	TITLE: Alex Parker - Blog
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
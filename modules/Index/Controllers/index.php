<?php

namespace Index\Index;

class Controller extends \Kotchasan\Controller
{

	public function index()
	{


		// define template directory location
		$loader = new \Twig_Loader_Filesystem(ROOT_PATH.'res/views');
		$twig = new \Twig_Environment($loader, array(
		));
		echo $twig->render('index.html.twig', array('resource_url' => WEB_URL.'res'));
	}
}

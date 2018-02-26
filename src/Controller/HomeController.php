<?php
// src/Controller/HomeController.php
namespace App\Controller;

// for use of @Route
use Symfony\Component\Routing\Annotation\Route;

// for use of response
//use Symfony\Component\HttpFoundation\Response

// for use twig
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{
	/**
	 * @Route("/")
	 */
	public function hello() {
	// this looks exactly the same

//		return new Response(
//			'<html><body>HOLA</body></html>'
//		);

		return $this->render('home.html.twig', array(
			'saludo' => 'hola',
		));
	}
}
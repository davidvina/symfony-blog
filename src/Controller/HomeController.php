<?php
// src/Controller/HomeController.php
namespace App\Controller;

// for use of @Route
use Symfony\Component\Routing\Annotation\Route;

// for use of response
use Symfony\Component\HttpFoundation\Response;

class HomeController {
	/**
	 * @Route("/")
	 */
	public function hello() {
	// this looks exactly the same

		return new Response(
			'<html><body>HOLA</body></html>'
		);
	}
}
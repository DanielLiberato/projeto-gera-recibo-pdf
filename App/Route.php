<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array
		(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['recibo_simples'] = array
		(
			'route' => '/recibo-simples',
			'controller' => 'indexController',
			'action' => 'geraPdf'
		);

		$this->setRoutes($routes);
	}

}

?>
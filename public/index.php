<?php

error_reporting(E_ALL);

ini_set('xdebug.collect_vars', 'on');
ini_set('xdebug.collect_params', '4');
//ini_set('xdebug.dump_globals', 'on');
//ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
ini_set('xdebug.show_local_vars', 'on');

try {

	/**
	 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
	 */
	$di = new \Phalcon\DI\FactoryDefault();

	/**
	 * Registering a router
	 */
	$di['router'] = function() {

		$router = new \Phalcon\Mvc\Router(false);
		$router->removeExtraSlashes(true);
		$router->setDefaultModule("backend");

		//Set 404 paths
		$router->notFound(array(
			"controller" => "index",
			"action" => "route404"
		));

		$router->add('/admin', array(
			'module' => 'backend',
			'controller' => 'index',
			'action' => 'index'
		));

		$router->add('/admin/:controller/:action/:params', array(
			'module' => 'backend',
			'controller' => 1,
			'action' => 2,
			'params' => 3
		));

		$router->add('/index', array(
			'module' => 'frontend',
			'controller' => 'index',
			'action' => 'index'
		));

		$router->add('/', array(
			'module' => 'frontend',
			'controller' => 'index',
			'action' => 'index'
		));

		return $router;
	};

	/**
	 * The URL component is used to generate all kind of urls in the application
	 */
	$di->set('url', function() {
		$url = new \Phalcon\Mvc\Url();
		$url->setBaseUri('/');
		return $url;
	});

	/**
	 * Start the session the first time some component request the session service
	 */
	$di->set('session', function() {
		$session = new \Phalcon\Session\Adapter\Files();
		$session->start();
		return $session;
	});

	/**
	 * Handle the request
	 */
	$application = new \Phalcon\Mvc\Application();

	$application->setDI($di);

	/**
	 * Register application modules
	 */
	$application->registerModules(array(
		'frontend' => array(
			'className' => 'Modules\Frontend\Module',
			'path' => '../apps/frontend/Module.php'
		),
		'backend' => array(
			'className' => 'Modules\Backend\Module',
			'path' => '../apps/backend/Module.php'
		)
	));

	echo $application->handle()->getContent();

} catch (Phalcon\Exception $e) {
	echo $e->getMessage();
} catch (PDOException $e){
	echo $e->getMessage();
}

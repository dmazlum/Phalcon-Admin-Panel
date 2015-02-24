<?php

namespace Modules\Backend;

use Modules\Backend\Plugins\MyValidation,
	Modules\Backend\Plugins\MyResizer;

class Module
{

	public function registerAutoloaders()
	{

		$loader = new \Phalcon\Loader();

		$loader->registerNamespaces(array(
			'Modules\Backend\Controllers' => __DIR__ . '/controllers/',
			'Modules\Backend\Models' => __DIR__ . '/models/',
			'Modules\Backend\Plugins' => __DIR__ . '/plugins/'
		));

		$loader->register();
	}

	public function registerServices($di)
	{

		/**
		 * Read configuration
		 */
		$config = include __DIR__ . "/config/config.php";

		$di['dispatcher'] = function () {

			$eventsManager = new \Phalcon\Events\Manager();
			$eventsManager->attach("dispatch:beforeException", function ($event, $dispatcher, $exception) {

				//Handle 404 exceptions
				if ($exception instanceof \Phalcon\Mvc\Dispatcher\Exception) {
					$dispatcher->forward(array(
						'controller' => 'index',
						'action' => 'show404'
					));

					return FALSE;
				}

				//Handle other exceptions
				$dispatcher->forward(array(
					'controller' => 'index',
					'action' => 'show503'
				));

				return FALSE;
			});

			$dispatcher = new \Phalcon\Mvc\Dispatcher();
			$dispatcher->setDefaultNamespace("Modules\Backend\Controllers");

			//Bind the EventsManager to the dispatcher
			$dispatcher->setEventsManager($eventsManager);

			return $dispatcher;
		};

		/**
		 * Setting up the view component
		 */
		$di['view'] = function () {

			$view = new \Phalcon\Mvc\View();

			$view->registerEngines(array(
				'.volt' => function ($view, $di) {

					$volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

					$volt->setOptions(array(
						'compiledPath' => __DIR__ . '/cache/',
						'compiledSeparator' => '_',
						'compileAlways' => TRUE // close it
					));

					//Add Functions
					$volt->getCompiler()->addFunction('strtotime', 'strtotime');

					return $volt;
				},
				'.phtml' => 'Phalcon\Mvc\View\Engine\Php'
			));

			$view->setViewsDir(__DIR__ . '/views/');
			$view->setLayoutsDir('../../common/layouts/');
			$view->setTemplateAfter('main');

			return $view;
		};

		/**
		 * Database connection is created based in the parameters defined in the configuration file
		 */
		$di['db'] = function () use ($config) {
			return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
				"host" => $config->database->host,
				"username" => $config->database->username,
				"password" => $config->database->password,
				"dbname" => $config->database->name,
				'charset' => "utf8"
			));
		};

		//Validator
		$di['MyValidation'] = function () {
			return new MyValidation();
		};

		//Resizer
		$di['MyResizer'] = function () {
			return new MyResizer();
		};
	}

}
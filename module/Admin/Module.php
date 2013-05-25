<?php

namespace Admin;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;

use Common\Model\Table\PostTable;
use Common\Model\Post;

class Module
{
	public function onBootstrap(MvcEvent $e)
	{
		$eventManager        = $e->getApplication()->getEventManager();
		$moduleRouteListener = new ModuleRouteListener();
		$moduleRouteListener->attach($eventManager);
		$e->getApplication()->getEventManager()->attach('render', array($this, 'registerJsonStrategy'), 100);
	    $e->getApplication()->getEventManager()->getSharedManager()->attach(__NAMESPACE__, 'dispatch', function($e) {
            $controller= $e->getTarget();
            $controller->layout('layout/'.__NAMESPACE__);
        }, 100);
	    
	}

	public function getConfig()
	{
		//echo __NAMESPACE__.' Module read config';
    	//$e = new \Exception();
    	//print_r($e->getTraceAsString());
		return include __DIR__ . '/config/module.config.php';
	}

	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\StandardAutoloader' => array(
						'namespaces' => array(
								__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
						),
				),
		);
	}
	
	public function getServiceConfig()
	{
		return array(
				'factories' => array(
						'Common\Model\Table\PostTable' =>  function($sm) {
							$tableGateway = $sm->get('PostTableGateway');
							$table = new PostTable($tableGateway);
							return $table;
						 },
					    'PostTableGateway' => function ($sm) {
							$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
							$resultSetPrototype = new ResultSet();
							$resultSetPrototype->setArrayObjectPrototype(new Post());
							return new TableGateway('wp_posts', $dbAdapter, null, $resultSetPrototype);
						},
				),
		);
	}
	
	public function registerJsonStrategy($e)
	{
		$app          = $e->getTarget();
		$locator      = $app->getServiceManager();
		$view         = $locator->get('Zend\View\View');
		$jsonStrategy = $locator->get('ViewJsonStrategy');
	
		// Attach strategy, which is a listener aggregate, at high priority
		$view->getEventManager()->attach($jsonStrategy, 100);
	}
	
}

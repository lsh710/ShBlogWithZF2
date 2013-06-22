<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
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
	  return array('factories'=>array(
            'MemcachedService'=>function($sm){
					$cache  = new \Zend\Cache\Storage\Adapter\Memcached($sm->get('MemcachedOptions'));
					$plugin = \Zend\Cache\StorageFactory::pluginFactory('exception_handler', array(
					    'throw_exceptions' => true,
					));
					$cache->addPlugin($plugin);
                    return $cache;
            },
            'MemcachedOptions'=>function($sm){
//print_r($sm->get('config'));exit;
                return new \Zend\Cache\Storage\Adapter\MemcachedOptions(array(
                            'ttl'           => 60 * 60 * 24 * 7, // 1 week
                            'namespace'     => 'sh_blog_mc',
                            'key_pattern'   => null,
                            'readable'      => true,
                            'writable'      => true,
                            'servers'       => $sm->get('config')['memcached']['servers'],
                ));
            }
        )
	  );
    }	

}

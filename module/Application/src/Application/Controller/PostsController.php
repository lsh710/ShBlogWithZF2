<?php
namespace Application\Controller;

use Application\Controller\AppBaseController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Zend\Cache\StorageFactory;

class PostsController extends AppBaseController
{
	public function indexAction()
	{
		//echo 'get query:'.$this->getEvent()->getRouteMatch()->getParam('xxx').'<br/>';
		//echo 'get query2:'.$this->params()->fromRoute('xxx').'<br/>';
		//echo 'get query3:'.$this->params('xxx').'<br/>';
		return new ViewModel();//posts
	}
	
	public function listAction()
	{
		//echo 'get query:'.$this->getEvent()->getRouteMatch()->getParam('xxx').'<br/>';
		//echo 'get query2:'.$this->params()->fromRoute('xxx').'<br/>';
		//echo 'get query3:'.$this->params('xxx').'<br/>';
// 		var_dump($this->getPostsTable()->queryWithLimit(function($select){
// 			$select->where(array('id' => 1));
// 			return $select;
// 		},0,1));exit;
		$view = new JsonModel(array('data'=>$this->getPostsTable()->getPost(1)));
		return new $view;//posts
	}
	
	public function memcacheAction()
	{
		$obj = new \stdClass();
		$obj->name = 'some body name';
		$obj->sex = 'man';
	/////$cache  = StorageFactory::adapterFactory('memcached',array('servers'=>array('127.0.0.1')));
	/////$plugin = StorageFactory::pluginFactory('exception_handler', array(
	/////    'throw_exceptions' => true,
	/////));
		//$cache->addPlugin($plugin);
        $cache = $this->getServiceLocator()->get('MemcachedService');
		print_r($cache->getItem('user1'));exit;
		echo 'get cache:'.$cache->getCaching()."\r\n";
		echo $cache->getAvailableSpace()."\r\n";
		echo 'add result:'.$cache->addItem('user1',$obj)."\r\n";
		exit;
	}
	
}

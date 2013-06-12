<?php
namespace Application\Controller;

use Application\Controller\AppBaseController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

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
	
}
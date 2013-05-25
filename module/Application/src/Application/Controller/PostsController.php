<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostsController extends AbstractActionController
{
	public function indexAction()
	{
		echo 'get query:'.$this->getEvent()->getRouteMatch()->getParam('xxx').'<br/>';
		echo 'get query2:'.$this->params()->fromRoute('xxx').'<br/>';
		echo 'get query3:'.$this->params('xxx').'<br/>';
		return new ViewModel();//posts
	}
}
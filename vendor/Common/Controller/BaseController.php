<?php
namespace Common\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BaseController extends AbstractActionController
{
	protected function getTable($tableAlias){
		$sm = $this->getServiceLocator();
		return $sm->get($tableAlias);
	}
	
	protected function getPostsTable(){
		return $this->getTable('Common\Model\Table\PostTable');
	}
}
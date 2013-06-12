<?php
namespace Admin\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BaseController extends AbstractActionController
{
	protected function getTable($tableAlias){
		$sm = $this->getServiceLocator();
		return $sm->get($tableAlias);
	}
}
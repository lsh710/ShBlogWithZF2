<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;

class SettingController extends AdminBaseController
{
	public function indexAction()
	{
		return new ViewModel();
	}

}
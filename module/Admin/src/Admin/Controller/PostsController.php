<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;

class PostsController extends BaseController
{
	public function indexAction()
	{
		return new ViewModel();
	}

}
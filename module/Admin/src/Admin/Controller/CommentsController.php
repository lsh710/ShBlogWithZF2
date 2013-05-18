<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;

class CommentsController extends BaseController
{
	public function indexAction()
	{
		return new ViewModel();
	}

}
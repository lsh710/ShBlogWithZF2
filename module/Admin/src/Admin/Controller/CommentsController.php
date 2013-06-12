<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;

class CommentsController extends AdminBaseController
{
	public function indexAction()
	{
		return new ViewModel();
	}

}
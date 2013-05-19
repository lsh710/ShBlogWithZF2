<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;
use Common\Model\Post;

class PostsController extends BaseController
{
	protected $postTable;
	
	public function indexAction()
	{
// 		//print_r(new Post());
// 		$post = new Post();
// 		$post->setOptions(array("id"=>"fff"));
// 		//print_r(new Post());
// 		var_dump($post);

		if (!$this->postTable) {
			$sm = $this->getServiceLocator();
			$this->postTable = $sm->get('Common\Model\Table\PostTable');
		}
		var_dump($this->postTable->fetchAll());
		var_dump($this->postTable->getPost(1));
		return new ViewModel();
	}

}
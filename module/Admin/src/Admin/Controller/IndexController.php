<?php

/**
 * {0}
 * 
 * @author
 * @version 
 */
namespace Admin\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends AdminBaseController
{
    public function indexAction() 
    {
        return new ViewModel();
    }
    
}

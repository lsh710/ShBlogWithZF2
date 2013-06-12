<?php

/**
 * {0}
 * 
 * @author
 * @version 
 */
namespace Admin\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends BaseController
{
    public function indexAction() 
    {
        return new ViewModel();
    }
    
}

<?php

namespace JhHubBase\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 * @package JhHubBase\Controller
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class IndexController extends AbstractActionController
{

    /**
     * @return array|ViewModel
     */
    public function dashboardAction()
    {
        return new ViewModel();
    }
}

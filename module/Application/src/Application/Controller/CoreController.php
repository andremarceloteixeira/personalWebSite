<?php
namespace Application\Controller;

use Application\Controller\CoreController;
use Zend\View\Model\ViewModel;
use \Zend\Mvc\Controller\AbstractActionController;
class CoreController extends AbstractActionController
{
    
    public function getDataBase() 
    {
        return $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
    }

}

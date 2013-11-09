<?php
namespace Application\Controller;
use Zend\View\Model\ViewModel;
use \Application\Model\Technologies as TechnologiesModel;
use Application\Controller\CoreController;


class TechnologiesController extends CoreController
{     
    public function technologiesAction()
    {
        $tecsModel = new TechnologiesModel();
        $tecs = $tecsModel->getAllTecs();
        $viewVariables = compact('tecs');
        $view = new ViewModel($viewVariables);
        $view->setTemplate('application/technologies/technologies');
        return $view;
    }
}

<?php
namespace Application\Controller;

use Application\Controller\CoreController;
use Zend\View\Model\ViewModel;
use Application\Model\Projects as ProjectsModel;
use Zend\Debug\Debug;
class ProjectsController extends CoreController
{
    
    public function projectsAction()
    {
        $type = (string) $this->getEvent()->getRouteMatch()->getParam('type');
        $projectsModel =  new ProjectsModel($this->getServiceLocator());
        $projects = $projectsModel->getProjectByType($type);
        $companys = $projectsModel->getAllCompanys();
        $viewVariables = compact('projects', 'type','companys');
        $view = new ViewModel($viewVariables);
        $view->setTemplate('application/projects/projects');
        return $view;
    }
    

}

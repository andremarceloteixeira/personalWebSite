<?php
namespace Application\Controller;

use Application\Controller\CoreController;
use Zend\View\Model\ViewModel;
use Application\Form\ContactForm;
use Application\Model\Reviews as ReviewsModel;
use Application\Filters\ContactFilter;
//use Zend\Session\Container; // We need this when using sessions
class IndexController extends CoreController
{     
    
    /**
     * This is Action for static translations text
     * - Set Head title in future!
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        $view = new ViewModel();
        $view->setTemplate('application/index/index');
        return $view;
    }
    
    /**
     * This is Action for static translations text
     * @return \Zend\View\Model\ViewModel
     */
    public function aboutAction() 
    {
        $view = new ViewModel();
        $view->setTemplate('application/index/about');
        return $view;
    }

    public function contactsAction() {
        $view = new ViewModel();
        $view->setTemplate('application/index/contacts');
        return $view;
    }
    
    public function reviewAction() 
    {
        $escaper = new \Zend\Escaper\Escaper('utf-8');
        $reviewsModel =  new ReviewsModel($this->getServiceLocator());
        $view = new ViewModel();
        $form = new ContactForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                //save in database
                 $reviewsModel->insertReview($escaper->escapeHtml($form->get('email')->getValue()), 
                            $escaper->escapeHtml($form->get('paragraph')->getValue()));
                 return $this->redirect()->toRoute('review');
            }
        }
        $variables['form'] = $form;
        $variables['reviews'] =  $reviewsModel->getAllReviews(); 
        $view->setVariables($variables);
        $view->setTemplate('application/index/review');
        return $view;
    }

    public function cvAction() 
    {
        //$session = new SessionContainer('initialized');
        //$country = $session->country;
        //$viewVariables = compact('country');
        //$view = new ViewModel($viewVariables);
        $view = new ViewModel();
        $view->setTemplate('application/index/cv');
        return $view;
    }
    
}

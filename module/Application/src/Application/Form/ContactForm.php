<?php

namespace Application\Form;
use Zend\Captcha; 
use Zend\Form\Element; 
use Zend\Form\Form; 
use Zend\InputFilter;
class ContactForm extends Form {

  public function __construct($name = null) 
    { 
        parent::__construct(''); 
        
        $this->setAttribute('method', 'post'); 
        
        $this->add(array( 
            'name' => 'email', 
            'type' => 'Zend\Form\Element\Text', 
            'attributes' => array( 
                'placeholder' => 'ct.name',
                'required' => 'required', 
            ), 
            'options' => array( 
                'label' => 'contact.name', 
                'class' => 'col-sm-2 control-label'
            ), 
        )); 
 
        $this->add(array( 
            'name' => 'paragraph', 
            'type' => 'Zend\Form\Element\Textarea', 
            'attributes' => array( 
                 'placeholder' => 'ct.message', 
                'required' => 'required', 
            ), 
            'options' => array( 
                'class' => 'form-control'
            ), 
        )); 


        $this->add(
                array(
                    'name' => 'csrf',
                    'type' => 'Zend\Form\Element\Csrf',
                    'options' => array(
                        'csrf_options' => array(
                            'timeout' => 3600 //one hour
                        )
                    )
        ));
        
          $this->add(
                array(
                        'name' => 'submit',
                        'type' => 'Zend\Form\Element\Submit',
                        'attributes' => array(
                            'value' => 'contact.form.submit',
                            'id' => 'submitbutton'
                        )
                ));
          
          $this->setInputFilter($this->createInputFilter());
    }
    public function createInputFilter()
    {
        $inputFilter = new InputFilter\InputFilter();
        //username
        $username = new InputFilter\Input('email');
        $username->setRequired(true);
        $inputFilter->add($username);
        //password
        $password = new InputFilter\Input('paragraph');
        $password->setRequired(true);
        $inputFilter->add($password);

        return $inputFilter;
    }

}

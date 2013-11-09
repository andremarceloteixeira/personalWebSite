<?php

namespace Application\Model;
use Application\Model\Core;

class Technologies {
  
    public function getAllTecs() 
    {
        $tecs = array(
            'Data Base Systems' => array(
                array('MySQL', '3', '3 years'),
                array('T-SQL/PL-SQL', '1', '1 year'),
                array('SQL', '2', '2 years'),
                array('SQL Server 2008 R2', '1', '1 year'),
                array('SQLite', '1', '1 year'),
                array('SQL Server Compact Edition', '1', '1 year'),
                array('Oracle', '1', '1 month'),
                array('PostGresQL', '2', '3 months'),
                array('No Sql DataBases', '2', '10 months'),
                array('MongoDB', '1', '1 month'),
            ),
            'Web Development' => array(
                array('PHP 5', '3', '6 years'),
                array('HTML', '3', '6 years'),
                array('CSS', '2', '3 years'),
                array('JSP/J2EE', '2', '1 years'),
                array('RUBY ON RAILS', '1', '1 year'),
                array('Django', '1', '1 year'),
                array('XML and Schemas', '2', '4 years'),
                array('JavaScript and Ajax', '2', '4 years'),
            ),
            'Software development methodologys' => array(
                array('Agile software development ', '1', '1 year'),
                array('SCRUM Methodology', '1', '1 year'),
                array('Lino Agile Methodology Bes', '1', '1 year'),
                array('Kanban', '1', '1 year'),
                array('Continuous Delivery', '2', '2 years'),
                array('Continuous integration', '2', '2 years'),
            ),
            'Software Testing' => array(
                array('Junit ', '2', '2 years'),
                array('PhpUnit', '2', '2 years'),
                array('Ruby - Testing Web Apps with Capybara and Cucumber ', '2', '2 years'),
                array('soapUI - Test a Web Services -', '2', '1 year'),
            ),
            'Mobile development' => array(
                array('Android - SDK/NDK ', '2', '2 years'),
                array('Windows Mobile 6/Windows Phone 7', '1', '1 year'),
                array('Objective C developer', '1', '1 year'),
                array('MonoTouch', '1', '1 year')
            ),
            'Developement' => array(
                array('Java', '3', '5 years'),
                array('PHP ', '3', '6 years'),
                array('Python', '1', '1 year'),
                array('Ruby', '1', '1 year'),
                array('C#', '2', '1 year'),
                array('C++', '1', '1 year'),
                array('C', '3', '2 years'),
                array('Prolog', '1', '1 year'),
                array('Perl', '1', '1 year'),
                array('JavaScript', '2', '5 years'),
            ),
            'Web Servers / Application Servers' => array(
                array('Apache Tomcat', '3', '5 years'),
                array('GlassFish Server ', '1', '1 year'),
                array('IIS', '1', '1 year'),
                array('JBoss', '1', '1 year'),
                array('Lamp', '1', '1 year'),
                array('Mamp', '1', '1 year'),
                array('Xampp', '3', '2 years'),
                array('Apache 2', '3', '2 years'),
                array('Ngix', '2', '2 years'),
            ),
            'IDE -Integrated Development Environment ' => array(
                array('NetBeans', '3', '10 years'),
                array('Dev-C++ ', '1', '1 year'),
                array('Eclipse', '3', '2 years'),
                array('Xcode', '2', '1 year'),
                array('Zend Studio', '1', '1 year'),
                array('Visual  Studio', '2', '2 years'),
            ),
            'CMS - Content management system' => array(
                array('Joomla', '2', '1 years'),
                array('Drupal ', '2', '2 years'),
            ),   
            'JavaScript Frameworks' => array(
                array('jQuery', '2', '4 years'),
                array('Prototype ', '2', '2 years'),
                array('Ext Js ', '2', '2 years'),
            ),
            'Php Frameworks' => array(
                array('Zend 1, 2', '2', '4 years'),
                array('Yii', '2', '2 years'),
                array('Symfony', '2', '2 years'),
                array('CodeIgniter', '2', '2 years'),
            ),
            'Java Frameworks' => array(
                array('Spring MVC', '2', '1 year'),
                array('Grails', '1', '1 year'),
                array('Vaadin', '1', '1 year'),
                array('GWT', '1', '1 year'),
                array('Wicket', '1', '1 year1'),
                array('Play', '1', '1 year'),
                array('Struts and JSF', '1', '1 years'),
            ),
            'Document management' => array(
                array('Alfresco', '1', '1 year'),
            ),
           'Operating Systems' => array(
                array('CentOS', '2', '1 year'),
                array('MAC OS X', '2', '5 year'),
                array('Linux-ubuntu/fedora/Mandriva/Debian/Mint', '2', '5 year'),
                array('Windows 95 - Windows 7 - Windows Server 2003/2008', '2', '15 years'),
            ),
             'Others' => array(
                array('UML', '2', '1 year'),
                array('BPMN', '2', '1 year'),
                array('BONITA SOFT', '1', '1 year'),
                array('KSOAP', '1', '1 years'),
                array('WEBSERVICES', '3', '4 years'),
            ),
            
        );
        return $tecs;
    }

}
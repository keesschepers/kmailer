<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel,
    Zend\Mvc\Controller\ActionController,
    Doctrine\ORM\EntityManager;

class IndexController extends AbstractActionController
{
    public function getEntityManager() {                
        return $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
    }

    public function indexAction()
    {
        $this->getEntityManager();

        return new ViewModel();
    }
}

<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

class IndexController extends \ATPCore\Controller\AbstractController
{
    public function indexAction()
    {
		$page = new \ATPCms\Model\Page();
		$page->loadByUrl('home');
	
		if(!$page->id)
		{
			$this->getResponse()->setStatusCode(404);
			return;
		}
	
		$pageWidget = new \ATPCms\View\Widget\Page();
		$pageWidget->page = $page;
	
		$view = new \Zend\View\Model\ViewModel();
		$view->addChild($pageWidget, 'page');
		return $view;
    }
}

<?php

namespace Fredb\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class LayoutsController extends Controller
{
	
    public function menuAction($lang="en")
    { 		
        
                /* @var  $oAdminClassService \Fredb\AdminBundle\Services\AdminClassService */
                $oAdminClassService = $this->get("admin_class_service");
                $aRowClass = $oAdminClassService->getRowClass();
                
                
       
		$templating = $this->get('templating');
		$contenu = $templating->render('FredbAdminBundle:Layouts:menu.html.twig', array("aRowClass"=>$aRowClass, "lang"=>$lang));
		$oResponse = new Response($contenu);
		$oResponse->setPrivate();
		$oResponse->setSharedMaxAge(0);
		return $oResponse;
		
    }	
	
  

	
}
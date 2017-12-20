<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $parcours = $em->getRepository('AppBundle:ProfExp')->findAll();
        $portfolio = $em->getRepository('AppBundle:Portfolio')->findAll();

        return $this->render('default/index.html.twig', [
            'parcours'=>$parcours,
            'portfolio'=>$portfolio
        ]);
    }

}

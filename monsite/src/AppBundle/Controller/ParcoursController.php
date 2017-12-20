<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParcoursController extends Controller{

    public function indexParcoursAction() {

        $em = $this->getDoctrine()->getManager();
        $parcours = $em->getRepository('AppBundle:ProfExp')->findAll();

        return $this->render('AppBundle:index.html.twig', [
            'parcours'=>$parcours
        ]);

    }

}
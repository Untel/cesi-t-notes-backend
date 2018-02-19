<?php

namespace CESI\SaisieNoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SaisieController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('CESISaisieNoteBundle:Saisie:index.html.twig', array('nom' => 'John Doe'));
        return new Response($content);
    }
}

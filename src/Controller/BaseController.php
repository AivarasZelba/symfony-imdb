<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @Route("/base", name="base")
     */
    public function index()
    {

        $this->get('app.imdb.service')->findShow('Agents of S.H.I.E.L.D.');

        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}

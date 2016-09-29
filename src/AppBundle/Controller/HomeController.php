<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 27/09/2016
 * Time: 12:59
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {

        return $this->render('/site/home.html.twig', []);
    }
}
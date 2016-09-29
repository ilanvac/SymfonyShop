<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 29/09/2016
 * Time: 17:28
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends  Controller
{

    public function indexAction(){
        return $this->render('/admin/dashboard.html.twig',
            []
        );
    }

}
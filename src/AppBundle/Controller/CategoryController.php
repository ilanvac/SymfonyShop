<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 29/09/2016
 * Time: 17:08
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends  Controller
{

    public function addIndex(){

        return $this->render('admin/addCategory.html.twig',[
            'form'=>'form'
        ]);

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 29/09/2016
 * Time: 13:33
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ProductController extends Controller
{
    public function indexAction(Request $request)
    {

        $product = new Product();

        $form = $this->createFormBuilder($product)
            ->add('category_id', ChoiceType::class,
                array('label' => 'Category:',
                    'attr' =>
                        array('class' => 'form-control text-capitalize'),
                    'choices' => [
                        'hard disk' => 1,
                        'motherboard' => 2,
                        'memory' => 3,
                        'processor' => 4
                    ]))
            ->add('name', TextType::class,
                array('label' => 'Product name:', 'attr' => array('class' => 'form-control')))
            ->add('price', IntegerType::class,
                array('label' => 'Price:', 'attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class,
                array('label' => 'Description:', 'attr' => array('class' => 'form-control')))
            ->add('save', SubmitType::class,
                array('label' => 'Create product:', 'attr' => array('class' => 'form-control')))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $formData = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($formData);
            $em->flush();

            return new Response('thanks ,product has been added to the database');
        }

        return $this->render('admin/addProduct.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
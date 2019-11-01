<?php
// src/Controller/FrontController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends AbstractController
{
    public function index()
    {
        return $this->render('Front/index.html.twig');
    }

    public function aboutme()
    {
        return $this->render('Front/aboutme.html.twig');
    }
    public function works()
    {
        return $this->render('Front/works.html.twig');
    }
    public function contact()
    {
        return $this->render('Front/contact.html.twig');
    }
}
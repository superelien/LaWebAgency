<?php
// src/Controller/FrontController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\WorksRepository;
use App\Form\ContactType;
use App\Entity\Contact;

class RandomdisController extends AbstractController
{
    public function index()
    {
        return $this->render('randomdis/base.html.twig');
    }

    public function randomdisFront1()
    {
        return $this->render('randomdis\Front_1\indexFront_1.html.twig');
    }
    public function randomdisFront2()
    {
        return $this->render('randomdis\Front_2\indexFront_2.html.twig');
    }

}
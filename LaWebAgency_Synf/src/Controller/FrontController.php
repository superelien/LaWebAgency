<?php
// src/Controller/FrontController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;
use App\Entity\Contact;

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
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $forms = $this->createForm(ContactType::class);

        $forms->handleRequest($request);

        if ($forms->isSubmitted() && $forms->isValid()) {


            $name = $forms['name']->getData();
            $mail = $forms['mail']->getData();
            $tel = $forms['tel']->getData();
            $sujet = $forms['sujet']->getData();
            $message = $forms['message']->getData();

            # définir les données de formulaire
            $contact->setName($name);
            $contact->setMail($mail);
            $contact->setSujet($sujet);
            $contact->setMessage($message);

            $message = (new \Swift_Message())
                ->setSubject($sujet)
                ->setFrom('aurelien@lawebagency.net')
                ->setTo('aurelien@lawebagency.net')
                ->setReplyTo($mail)
                ->setBody(
                    $this->renderView(
                        'emails/registration.html.twig',
                        ['name' => $name,
                          'mail' => $mail,
                          'tel' => $tel,
                          'sujet' => $sujet,
                          'message' => $message
                      ]),
                    'text/html');
            if( $mailer->send($message)){
              $this->addFlash('success', 'Votre message a bien été envoyé.');
            }

        }
        if ($forms->isSubmitted() && !$forms->isValid()) {
          $this->addFlash('warning', 'Votre message n\'a pas été envoyé.');
          }
        return $this->render('Front/contact.html.twig', [
                       'our_form' => $forms->createView(),
                   ]);
    }
    public function mentions()
    {
        return $this->render('Front/legals.html.twig');
    }
}
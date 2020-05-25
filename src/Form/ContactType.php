<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;


class ContactType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            // 'label' => 'Votre nom :',
            'attr' => [
                'class' => 'form-control mb-3',
                'required' => true

            ]
        ])
        ->add('mail', EmailType::class, [
            // 'label' => 'Votre E-mail :',
            'attr' => [
                'class' => 'form-control mb-3',
                'required' => true
            ]
        ])
        ->add('tel', NumberType::class, [
            // 'label' => 'Votre numéro de téléphone :',
            'attr' => [
                'class' => 'form-control mb-3',
                'required' => true
            ]
        ])
        ->add('sujet', TextType::class, [
            // 'label' => 'Le sujet de votre message:',
            'attr' =>  [
                'class' => 'form-control mb-3',
                'required' => true
            ]
        ])
        ->add('message', TextareaType::class, [
            // 'label' => 'Votre message:',
            'attr' => [
                'class' => 'form-control mb-3',
                'required' => true
            ]
        ])
        ->add('captcha', Recaptcha3Type::class, [
            'constraints' => new Recaptcha3(),
            'action_name' => 'signup|resend_email|forgot_password',
        ]);

    }

    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults(array(
    //         'data_class' => Contact::class
    //     ));
    // }
}
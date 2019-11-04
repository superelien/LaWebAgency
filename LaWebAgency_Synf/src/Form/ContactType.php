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


class ContactType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'required' => true

            ]
        ])
        ->add('mail', EmailType::class, [
            'attr' => [
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('tel', NumberType::class, [
            'attr' => [
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('sujet', TextType::class, [
            'attr' =>  [
                'class' => 'form-control',
                'required' => true
            ]
        ])
        ->add('message', TextareaType::class, [
            'attr' => [
                'class' => 'form-control',
                'required' => true
            ]
        ]);

    }

    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults(array(
    //         'data_class' => Contact::class
    //     ));
    // }
}
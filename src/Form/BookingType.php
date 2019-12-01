<?php

namespace App\Form;

use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
    
                ]
            ])
            ->add('beginAt', DateType::class, [
                'label' => 'Commence jour :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
                ],
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ]
            ])
            ->add('beginAtHour', TimeType::class, [
                'label' => 'Commence heure :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
                ],
                'placeholder' => [
                    'hour' => 'Heure', 'minute' => 'Minute', 'second' => 'Seconde',
                ]
            ])
            ->add('endAt', DateType::class, [
                'label' => 'Fini jour :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
                ],
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ]
            ])
            ->add('endAtHour', TimeType::class, [
                'label' => 'Fini heure :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
                ],
                'placeholder' => [
                    'hour' => 'Heure', 'minute' => 'Minute', 'second' => 'Seconde',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}

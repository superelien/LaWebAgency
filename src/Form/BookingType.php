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
                'label' => 'Commence :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
    
                ]
            ])
            ->add('endAt', DateType::class, [
                'label' => 'Fini :',
                'attr' => [
                    'class' => 'form-control',
                    'required' => true
    
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

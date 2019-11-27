<?php

namespace App\Form;

use App\Entity\Works;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class WorksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
             ->add('imageFile', VichImageType::class, [
                'required' => false,
                //'allow_delete' => true,
                'download_label' => false,
                'download_uri' => true,
                'image_uri' => true,
                'label' => 'Image',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('description', TextareaType::class,[
            'attr' => [
                'class' => 'form-control']
            ])
            ->add('tags', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            // ->add('tags', ChoiceType::class, [
            //     'choices'  => [
            //         '#infographie' => '#infographie',
            //         '#web' => '#web',
            //         '#photo' => '#photo',
            //         ],
            //     'expanded'  => true,
            //     'multiple'  => true,
            // ])
            
            ->add('linkWebsite', TextType::class, [
                'required' => false,
                'label' => 'Lien du site',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Works::class,
        ]);
    }
}

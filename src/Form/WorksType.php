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

class WorksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
             ->add('imageFile', VichImageType::class, [
                'required' => false,
                //'allow_delete' => true,
                'download_label' => false,
                'download_uri' => true,
                'image_uri' => true,
                'label' => 'Image'
            ])
            ->add('updateAt', DateType::class)
            ->add('description', TextareaType::class)
            ->add('tags', TextType::class)
            // ->add('imagebigFile', VichImageType::class, [
            //     'required' => false,
            //     //'allow_delete' => true,
            //     'download_label' => false,
            //     'download_uri' => true,
            //     'image_uri' => true,
            //     'label' => 'Image Grande'
            // ])
            ->add('linkWebsite', TextType::class, [
                'required' => false,
                'label' => 'Lien du site'
            ])
            ->add('envoyer', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-default')
            ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Works::class,
        ]);
    }
}

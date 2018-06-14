<?php

namespace AppBundle\Form;

use AppBundle\Entity\Artist;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ArtworkType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de L\'oeuvre',
                'attr' => [
                    'required' => true,
                ]
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('size', TextType::class, [
                'label' => 'Taille de L\'oeuvre',
                'attr' => [
                    'required' => true,
                ]
            ])
            ->add('technique', TextType::class, [
                'label' => 'Technique utilisé',
                'attr' => [
                    'required' => true,
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'required' => true,
                ]
            ])
            ->add('image')
            ->add('artists', EntityType::class, [
                'required' => false,
                'class' => Artist::class,
                'label' => 'Artiste',
                'placeholder' => 'Choisir un artiste',
                'choice_label' => function ($artist) {
                    return $artist->getFirstName() . ' ' . $artist->getLastName();
                }
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Artwork',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_artwork';
    }


}

<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtworkUserEmotionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('artwork', EntityType::class, array(
                    'class' => 'AppBundle\Entity\Artwork',
                    'choice_label' => 'name',
                ))
                ->add('user', EntityType::class, array(
                    'class' => 'AppBundle\Entity\User',
                    'choice_label' => 'id'
                ))
                ->add('emotion', EntityType::class, array(
                    'class' => 'AppBundle\Entity\Emotion',
                    'choice_label' => 'name',
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ArtworkUserEmotion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_artworkuseremotion';
    }


}

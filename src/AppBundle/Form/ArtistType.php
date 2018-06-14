<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ArtistType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
        $builder
            ->add('firstName', TextType::class, array('attr' => array('required' => true)))
            ->add('lastName', TextType::class, array('attr' => array('required' => true)))
            ->add('nickName', TextType::class, array('attr' => array('required' => true)));
=======
        $builder->add('firstName')
                ->add('lastName')
                ->add('nickName');
>>>>>>> e8365f6287ac0f9babcafea552202ce919d7c8bd
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Artist'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_artist';
    }


}

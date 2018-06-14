<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\TextType;

=======
use Symfony\Component\Form\Extension\Core\Type\DateType;
>>>>>>> e8365f6287ac0f9babcafea552202ce919d7c8bd

class ArtworkType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
        $builder
            ->add('name', TextType::class, array('attr' => array('required' => true)))
            ->add('date')
            ->add('size', TextType::class, array('attr' => array('required' => true)))
            ->add('technique', TextType::class, array('attr' => array('required' => true)))
            ->add('description', TextType::class, array('attr' => array('required' => true)));
=======
        $builder->add('name')
                ->add('date', DateType::class, array(
                    'label'=>'Date',
                    'widget'=>'single_text',
                    'format' => 'yyyy-MM-dd'))
                ->add('size')
                ->add('technique')
                ->add('description')
                ->add('artists');
>>>>>>> e8365f6287ac0f9babcafea552202ce919d7c8bd
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Artwork'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_artwork';
    }


}

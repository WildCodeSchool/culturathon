<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ArtworkType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('required' => true)))
            ->add('date', DateType::class, array(
                'label'=>'Date',
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd'))
            ->add('size', TextType::class, array('attr' => array('required' => true)))
            ->add('technique', TextType::class, array('attr' => array('required' => true)))
            ->add('description', TextType::class, array('attr' => array('required' => true)))
            ->add('artists');          
    }
    
    /**
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

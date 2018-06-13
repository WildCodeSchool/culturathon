<?php
/**
 * Created by PhpStorm.
 * User: Neimax
 * Date: 13/06/18
 * Time: 20:34
 */

namespace AppBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;



class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, array('attr' => array('required' => true)))
            ->add('lastName', TextType::class, array('attr' => array('required' => true)))
            ->add('email', EmailType::class, array('attr' => array('required' => true)))
            ->add('phone', TelType::class, array('attr' => array('required' => true)))
            ->add('role', TextType::class, array('attr' => array('required' => true)));
    }

    public function getParent()
    {
        return RegistrationFormType::class;
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName(): string
    {
        return $this->getBlockPrefix();
    }
}
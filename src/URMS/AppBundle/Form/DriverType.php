<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14-Dec-15
 * Time: 15:52
 */
namespace URMS\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class DriverType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('driverId', TextType::class)
            ->add('nicNo', TextType::class)
            ->add('contactNo', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'URMS\AppBundle\Entity\Driver'
        ));
    }

}